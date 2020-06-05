<?php

namespace App\Http\Controllers;

use Session;

use App\Billing;
use App\Cart;
use App\Faq;
use App\Order;
use App\Post;
use App\Product;
use App\Shipping;
use App\Vat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//all paypal
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class UserController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }


    public function catSearch($cat,$name){
        $getProducts = Product::where($cat,$name)->get();
        $getName = $name;
        return view('layouts.category',compact(['getProducts','getName']));
    }

    public function addCart($id)
    {
//        if(Auth::check()){
//            $cart = new Cart();
//            $cart->user_id = Auth::id();
//            $cart->product_id = $id;
//            $cart->quantity = 1;
//            $cart->price = Product::find($id)->total_price;
//            $cart->save();
//
//            return redirect('/')->with('cartSuccess','Product Added!');
//
//        }else{
//            return redirect('/login')->with('cartError','You Need to login First!');
//        }
        $arr = [
            'id' => uniqid(),
            'user_id' => Auth::id(),
            'product_id' => $id,
            'quantity' => 1,
            'price' => Product::find($id)->total_price
        ];

        $c = new Cart();
        $c->cart($arr);

        return redirect()->back();
    }

    public function viewCart()
    {
        //dd(Session::get('cartList'));
//        if(Auth::check()){
//            $getCart = Cart::where('user_id',Auth::id())->get();
//            $subtotal = 0;
//            foreach ($getCart as $c){
//                $price = $c->price*$c->quantity;
//                $subtotal = $subtotal + $price;
//            }
//            //session()->flush();
//            session()->put('subtotal',$subtotal);
//            $getVat = Vat::all()->first()->vat;
//            $vatAmount = $subtotal * ($getVat/100);
//            $totalAmountWithVat = $subtotal + $vatAmount;
//            session()->put('totalWithVat',$totalAmountWithVat);
//            return view('user.viewCart',compact('getCart'));
//        }else{
//            return redirect('/')->with('cartError','You Need to login First!');
//        }
        $getCart = Session::get('cartList');
        $subtotal = 0;
        if($getCart!=null){
            foreach ($getCart as $cart){
                $price = $cart['price']*$cart['quantity'];
                $subtotal = $subtotal + $price;
            }
        }

        session()->put('subtotal',$subtotal);
        session()->put('subtotal',$subtotal);
        $getVat = Vat::all()->first()->vat;
        $vatAmount = $subtotal * ($getVat/100);
        $totalAmountWithVat = $subtotal + $vatAmount;
        session()->put('totalWithVat',$totalAmountWithVat);
        //dd($getCart);
        return view('user.viewCart',compact('getCart'));
    }

    public function updateCart()
    {
        $this->validate(request(),[
            'id' =>'required',
            'quantity' => 'required'
        ]);
        //dd('sd');
        $getCart = Session::get('cartList');
        $ids = request('id');
        $qs = request('quantity');
        foreach($ids as $key => $id){
            //Cart::where('id',$id)->update(['quantity'=>$qs[$key]]);
            foreach ($getCart as $c){
                if($c['id'] == $id){
                    $getCart[$key]['quantity'] = $qs[$key];
                }
            }
        }
        //dd($getCart);
        Session::put('cartList', $getCart);


        return redirect()->back();

    }

    public function deleteCart($id)
    {

        $getCart = Session::get('cartList');
        foreach ($getCart as $key => $c){
            if($c['id'] == $id){
//               array_shift($getCart[$key]);
                //dd($key);
                unset($getCart[$key]);
            }
        }
       // dd($getCart);
        Session::put('cartList',$getCart);
        return redirect('/cart/view')->with('cartMsg','Product Removed!');
    }


    public function showCheckout()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if(session()->get('shipMethod') != 'express'){
            session()->put('shipMethod','normal');
        }
        $getShipMethod = session()->get('shipMethod');
        if($getShipMethod == 'normal'){
            $shipCost = 25;
        }elseif($getShipMethod == 'express'){
            $shipCost = 100;
        }
        session()->put('shipCost',$shipCost);
        $totalCostWithShipAndVat = session()->get('totalWithVat') + session()->get('shipCost');
        session()->put('totalCostWithAll',$totalCostWithShipAndVat);
//        $orders = Cart::where('user_id',Auth::id())->get();
        $orders = Session::get('cartList');
        return view('user.checkout',compact('orders'));
    }

    public function finalCheckout()
    {
        if(Cart::where('user_id',Auth::id())->count() <= 0){
            return redirect('cart/view')->with('cartError','Cart is empty!');
        }
        $this->validate(request(),[
            'bill_name' => 'required',
            'bill_email' => 'required|email',
            'bill_phone' => 'required|numeric',
            'bill_mobile' => '',
            'bill_country' => 'required',
            'bill_city' => 'required',
            'bill_state' => 'required',
            'bill_zip' => 'required',
            'bill_street' => 'required',
            'bill_special' => '',
            'bill_check' => 'required',

            'ship_name' => 'required',
            'ship_email' => 'required|email',
            'ship_phone' => 'required|numeric',
            'ship_mobile' => '',
            'ship_country' => 'required',
            'ship_city' => 'required',
            'ship_state' => 'required',
            'ship_zip' => 'required',
            'ship_street' => 'required',
            'ship_special' => '',
            'ship_check' => 'required',

            'payment_method' => 'required'
        ]);

        if(request('payment_method') == 'cashOnDeliver'){

//            $getCart = Cart::where('user_id',Auth::id())->get();
            $getCart = Session::get('cartList');
            foreach ($getCart as $cart){
                $order = new Order();
                $order->user_id = Auth::id();
                $order->product_id = $cart['product_id'];
                $order->quantity = $cart['quantity'];
                $order->total_price = Product::find($cart['product_id'])->total_price * $cart['quantity'];
                $order->date = Carbon::now()->toDateString();
                $order->payment_method = 'Cash On Delivery';
                $order->shipping_method = session()->get('shipMethod');
                $order->status = 'pending';
                $order->save();

                $bill = new Billing();
                $bill->order_id = $order->id;
                $bill->name = request('bill_name');
                $bill->email = request('bill_email');
                $bill->phone = request('bill_phone');
                if(request('bill_mobile') == null){
                    $bill->mobile = 000;
                }else{
                    $bill->mobile = request('bill_mobile');
                }

                $bill->country = request('bill_country');
                $bill->city = request('bill_city');
                $bill->state = request('bill_state');
                $bill->zip = request('bill_zip');
                $bill->street = request('bill_street');
                if(request('bill_special') == null){
                    $bill->note = 'none';
                }else{
                    $bill->note = request('bill_special');
                }

                $bill->save();

                $ship = new Shipping();
                $ship->order_id = $order->id;
                $ship->name = request('ship_name');
                $ship->email = request('ship_email');
                $ship->phone = request('ship_phone');
                if(request('ship_mobile') == null){

                    $ship->mobile = 000;
                }else{
                    $ship->mobile = request('ship_mobile');
                }

                $ship->country = request('ship_country');
                $ship->city = request('ship_city');
                $ship->state = request('ship_state');
                $ship->zip = request('ship_zip');
                $ship->street = request('ship_street');
                if(request('ship_special') == null){
                    $ship->note = 'none';
                }else{
                    $ship->note = request('ship_special');
                }

                $ship->save();

                //Cart::find($cart->id)->delete();

            }

            session()->forget(['subtotal','totalWithVat','shipMethod','totalCostWithAll','cartList']);

            return redirect('/')->with('orderSuccess','Order Placed Successfully!');


        }elseif (request('payment_method') == 'paypal'){

            //put data in array;
            $bill = [
                'bill_name' => request('bill_name'),
                'bill_email' => request('bill_email'),
                'bill_phone' => request('bill_phone'),
                'bill_mobile' => request('bill_mobile'),
                'bill_country' => request('bill_country'),
                'bill_city' => request('bill_city'),
                'bill_state' => request('bill_state'),
                'bill_zip' => request('bill_zip'),
                'bill_street' => request('bill_street'),
                'bill_special' => request('bill_special'),

                'ship_name' => request('ship_name'),
                'ship_email' => request('ship_email'),
                'ship_phone' => request('ship_phone'),
                'ship_mobile' => request('ship_mobile'),
                'ship_country' => request('ship_country'),
                'ship_city' => request('ship_city'),
                'ship_state' => request('ship_state'),
                'ship_zip' => request('ship_zip'),
                'ship_street' => request('ship_street'),
                'ship_special' => request('ship_special'),

            ];
            session()->put('data',$bill);
            //end

            $payer = new Payer();
            $payer->setPaymentMethod("paypal");

            $amount = new Amount();
            $amount->setCurrency("USD")
                ->setTotal(session()->get('totalCostWithAll'));


            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setDescription("Flower Order");


            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl(url('cart/checkout/success'))
                ->setCancelUrl(url('cart/checkout/error'));


            $payment = new Payment();
            $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));



            try {
                $payment->create($this->_api_context);
            } catch (Exception $ex) {

                return redirect('/cart/view')->with('cartError','Payment Failed!');
            }

            session()->put('payment_id',$payment->getId());


            //doing the cart things before redirect

            return redirect($payment->getApprovalLink());
        }


    }

    public function payCheck(Request $request)
    {
        if(empty($_GET['PayerID']) || empty(session()->get('payment_id'))){
            return redirect('/cart/view')->with('cartError','UnAuthorized!');
        }

        $payment_id = session()->get('payment_id');
        session()->forget('payment_id');
        $payE = Payment::get($payment_id,$this->_api_context);
        $exe = new PaymentExecution();
        $exe->setPayerId($_GET['PayerID']);

        $res = $payE->execute($exe,$this->_api_context);

        if($res->getState() == 'approved'){
            $getData = session()->get('data');
//            $getCart = Cart::where('user_id',Auth::id())->get();
            $getCart = Session::get('cartList');
            foreach ($getCart as $cart){
                $order = new Order();
                $order->user_id = Auth::id();
                $order->product_id = $cart['product_id'];
                $order->quantity = $cart['quantity'];
                $order->total_price = Product::find($cart['product_id'])->total_price * $cart['quantity'];
                $order->date = Carbon::now()->toDateString();
                $order->payment_method = 'Pay Pal';
                $order->shipping_method = session()->get('shipMethod');
                $order->status = 'pending';
                $order->save();

                $bill = new Billing();
                $bill->order_id = $order->id;
                $bill->name = $getData['bill_name'];
                $bill->email = $getData['bill_email'];
                $bill->phone = $getData['bill_phone'];
                if(request('bill_mobile') == null){
                    $bill->mobile = 0;
                }else{
                    $bill->mobile = request('bill_mobile');
                }

                $bill->country = $getData['bill_country'];
                $bill->city = $getData['bill_city'];
                $bill->state = $getData['bill_state'];
                $bill->zip = $getData['bill_zip'];
                $bill->street = $getData['bill_street'];
                if(request('bill_special') == null){
                    $bill->note = 'none';
                }else{
                    $bill->note = request('bill_special');
                }

                $bill->save();

                $ship = new Shipping();
                $ship->order_id = $order->id;
                $ship->name = $getData['ship_name'];
                $ship->email = $getData['ship_email'];
                $ship->phone = $getData['ship_phone'];
                if(request('ship_mobile') == null){
                    $ship->mobile = 0;
                }else{
                    $ship->mobile = request('ship_mobile');
                }

                $ship->country = $getData['ship_country'];
                $ship->city = $getData['ship_city'];
                $ship->state = $getData['ship_state'];
                $ship->zip = $getData['ship_zip'];
                $ship->street = $getData['ship_street'];
                if(request('ship_special') == null){
                    $ship->note = 'none';
                }else{
                    $ship->note = request('ship_special');
                }

                $ship->save();

                //Cart::find($cart->id)->delete();

            }
            session()->forget(['subtotal','totalWithVat','shipMethod','totalCostWithAll','data','cartList']);
            return redirect('/')->with('orderSuccess','Order Placed Successfully!');
        }else{
            return redirect('/cart/view')->with('cartError','Error Occur When Payment!');
        }
    }

    public function changeShipMethod($method)
    {
        if($method == 'normal'){
            session()->put('shipMethod','normal');
        }elseif($method == 'express'){
            session()->put('shipMethod','express');
        }

        return redirect()->back();
    }


    //front page

    public function support()
    {
        $support = Post::where('category','support')->get();
        return view('support',compact('support'));
    }

    public function blog()
    {
        $blog = Post::where('category','blog')->paginate(10);
        return view('blog',compact('blog'));
    }

    public function showBlog($id)
    {
        if($id != null){
            $post = Post::find($id);
            return view('blogShow',compact('post'));
        }
    }

    public function event()
    {
        $event = Post::where('category','event')->get();
        return view('event',compact('event'));
    }

    public function about()
    {
        $about = Post::where('category','about')->get();
        return view('about',compact('about'));
    }

    public function faq()
    {
        $faq = Faq::latest()->get();
        return view('faq',compact('faq'));
    }

    public function contact()
    {
        return view('contact');
    }

}
