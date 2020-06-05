<?php

namespace App\Http\Controllers;

use App\Billing;
use App\Faq;
use App\Order;
use App\Post;
use App\Product;
use App\Shipping;
use App\User;
use App\Vat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stock = Product::where('name','!=','null')->count();
        $order = Order::all()->count();
        $newOrder = Order::where('status','pending')->count();
        $deliverOrder = Order::where('status','delivered')->count();
        return view('admin.dashboard',compact(['stock','order','newOrder','deliverOrder']));
    }

    public function showAddProduct()
    {
        $getLastId = 1 +  Product::latest()->first()->id;
        $getVat = Vat::all()->first()->vat;
        return view('admin.addProduct',compact(['getVat','getLastId']));
    }

    public function addProduct(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'productCat' => 'required',
            'occasionCat' => 'required',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $picture = uniqid().'.jpg';
        if($request->hasFile('picture')){
            $request->picture->move('img/product/',$picture);
        }
        $total = request('price') - request('discount');
        Product::create([
            'name' => request('name'),
            'productCat' => request('productCat'),
            'occasionCat' => request('occasionCat'),
            'price' => request('price'),
            'discount' => request('discount'),
            'total_price' => $total,
            'picture' => $picture
        ]);

        return redirect()->back()->with('addSuccess','Product Added!');
    }


    public function showProduct()
    {
        $allProduct = Product::where('name','!=','')->orderBy('id','desc')->get();
        return view('admin.showProduct',compact('allProduct'));
    }

    public function showEditProduct($id)
    {
        $getProduct = Product::find($id);
        return view('admin.editProduct',compact('getProduct'));
    }

    public function editProduct(Request $request,$id){
        $this->validate(request(),[
            'name' => 'required',
            'productCat' => 'required',
            'occasionCat' => 'required',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'picture' => 'image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $getProduct = Product::find($id);
        if($request->hasFile('picture')){
            $request->picture->move('img/product/',$getProduct->picture);
        }

        $total = request('price') - request('discount');

        $getProduct->update([
            'name' => request('name'),
            'productCat' => request('productCat'),
            'occasionCat' => request('occasionCat'),
            'price' => request('price'),
            'discount' => request('discount'),
            'total_price' => $total,
            'picture' => $getProduct->picture,
        ]);

        return redirect()->back()->with('addSuccess','Product Updated!');
    }

    public function updateVat()
    {
        $this->validate(request(),[
            'vat' => 'required'
        ]);

        Vat::all()->first()->update(['vat'=>request('vat')]);
        return redirect()->back();
    }

    public function showOrder()
    {
        $orders = Order::latest()->paginate(50);
        return view('admin.order',compact('orders'));
    }

    public function updateOrder($id)
    {
        $order = Order::find($id);
        $order->status = 'delivered';
        $order->save();

        return redirect()->back();
    }

    public function viewOrder($id)
    {
        $getOrder = Order::find($id);
        $getUser = User::find($getOrder->user_id);
        $getShip = Shipping::where('order_id',$id)->first();
        return view('admin.orderView',compact(['getOrder','getUser','getShip']));
    }

    public function deleteOrder($id)
    {
        Order::find($id)->delete();
        Billing::where('order_id',$id)->delete();
        Shipping::where('order_id',$id)->delete();

        return redirect()->back();
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('addSuccess','Product Deleted!');
    }

    public function showAddPost()
    {
        return view('admin.addPost');
    }

    public function addPost(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:1024',
            'category' => 'required'
        ]);

        $rand = uniqid().'.jpg';

        $request->picture->move('img/posts/',$rand);

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'picture' => $rand,
            'category' => request('category')
        ]);

        return redirect()->back()->with('addSuc','Post Added');
    }

    public function showPost()
    {
        $allPost = Post::latest()->paginate(50);
        return view('admin.allPost',compact('allPost'));
    }

    public function showEditPost($id)
    {
        $getPost = Post::find($id);
        return view('admin.editPost',compact('getPost'));
    }

    public function editPost(Request $request)
    {
        $this->validate(request(),[
            'id' => 'required',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'category' => 'required',
            'picture' => 'image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if($request->hasFile('picture')){
            $request->picture->move('img/posts/',Post::find(request('id'))->picture);
        }

        Post::find(request('id'))->update([
            'title' => request('title'),
            'description' => request('description'),
            'category' => request('category')
        ]);

        return redirect()->back()->with('updateSucc','Update Success');
    }

    public function deletePost($id)
    {
        Post::find($id)->delete();
        return redirect()->back();
    }

    public function showAddFaq()
    {
        return view('admin.showAddFaq');
    }

    public function addFaq()
    {
        $this->validate(request(),[
            'title' => 'required|min:5',
            'details' => 'required|min:10'
        ]);

        Faq::create([
            'title' => request('title'),
            'details' => request('details')
        ]);

        return redirect()->back()->with('addSucc','Faq Added!');
    }

    public function showFaq()
    {
        $getFaq = Faq::latest()->get();
        return view('admin.showFaq',compact('getFaq'));
    }

    public function showEditFaq($id)
    {
        $faq  = Faq::find($id);
        return view('admin.editFaq',compact('faq'));
    }

    public function editFaq()
    {
        $this->validate(request(),[
            'id' => 'required',
            'title' => 'required|min:5',
            'details' => 'required|min:10'
        ]);

        Faq::find(request('id'))->update([
            'title' => request('title'),
            'details' => request('details')
        ]);

        return redirect()->back()->with('updateSuccess','updated Successfully');
    }

    public function deleteFaq($id)
    {
        if($id != null){
            Faq::find($id)->delete();
            return redirect()->back();
        }
    }
}
