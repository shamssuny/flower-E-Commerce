@extends('layouts.master')

@section('title','Category Search')

@section('content')
    <div class="Love">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="decor-title">
                        <h2 class="other-title" id="Love">{{ $getName }}</h2>
                    </div>
                </div>
            </div>
            <div class="group-product">
                <div class="row">

                    @foreach($getProducts->shuffle() as $product)
                        <div class="col-md-3">
                            <div class="single-product">
                                <img src="{{ asset('img/product/'.$product->picture) }}" class="img-fluid">
                                <div class="sale-banner">
                                    <span>Sale</span>
                                </div>
                                <div class="product-price">
                                    <span class="price_sale"><span data-currency-usd="$200.00" class="money">{{ $product->total_price }}$</span></span>
                                    @if($product->discount <= 0)

                                    @else
                                        <del class="price_compare"> <span data-currency-usd="$300.00" class="money">{{ $product->price }}$</span></del>
                                    @endif
                                </div>
                                <div class="product-hover">
  <span class="buy">
      <a href="{{ url('addCart/'.$product->id) }}" class="hover-view"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Add to Cart</a>
  </span>
                                    <span class="product-listed ">
   <a href="" class="hover-view mr-auto">
        {{--<i class="fa fa-eye" aria-hidden="true"></i>--}}
   </a>
   <a href="" class="hover-view">
      {{--<i class="fa fa-heart-o" aria-hidden="true"></i>    --}}
   </a>
  </span>

                                </div>
                                <div class="product-title">
                                    <a class="title-5" href="#">{{ $product->name }}</a>
                                </div>
                                <div class="product-rating">
                                    <a href="">
            <span class="star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <!-- row end-->
            </div>
        </div>
    </div>
@endsection