<?php

namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id','quantity','price'];

    public $cartList=array();
    public function cart($arr)
    {
//        session()->forget('cartList');
////        dd('d');
//        dd(session()->get('cartList'));
//        $this->cartList = session()->get('cartList');
//        if($this->cartList == null){
//            array_push($this->cartList,$arr);
//            session()->put('cartList',$this->cartList);
//
//            //$this->cartList = $arr;
//           // dd($this->cartList.'sdf');
//
//        }else{
//            $this->cartList = session()->get('cartList');
//            array_push($this->cartList,$arr);
//            session()->put('cartList',$this->cartList);
//            //$a = session()->get('cartList');
//            $this->cartList = null;
//
//        }
        $c = Session::get('cartList');
        $c[] = $arr;
        Session::put('cartList',$c);

    }
}
