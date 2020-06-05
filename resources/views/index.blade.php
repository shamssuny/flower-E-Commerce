@extends('layouts.master')

@section('title','Flower')

@section('content')
<div class="slider-contain">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  @if(session('orderSuccess'))
                      <p class="alert alert-success text-center">{{ session('orderSuccess') }}</p>
                  @endif
                  @if(session('cartError'))
                      <p class="alert alert-warning">{{ session('cartError') }}</p>
                  @endif
                      @if(session('cartSuccess'))
                          <p class="alert alert-success">{{ session('cartSuccess') }}</p>
                      @endif
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/rose.jpg" id="img-slide" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/rose.jpg" id="img-slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/rose.jpg" id="img-slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              </div>
          </div>
      </div>
</div> 
<div class="new-arrive">
<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="decor-title">
<ul class="nav nav-tabs">
<li class="home-title"><a href="#popular" class="home-link" data-toggle="tab">Most Popular</a></li>
<li class=" home-title"><a href="#home" class="home-link" data-toggle="tab">New Arrival</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane active" id="popular">
<div class="group-product">
  <div class="row">

      @foreach($getProduct2->shuffle() as $product)
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

   <!-- row end           -->
</div>
</div>
<div class="tab-pane" id="home">
<div class="group-product">
  <div class="row">

      @foreach($getProduct->shuffle() as $product)
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

   <!-- row end           -->
</div>
</div>
</div>


</div>
</div>
</div>
</div>

<!-- birthday  -->


<div class="new-arrive">
<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="decor-title" id="mbirth">
<ul class="nav nav-tabs">
<li class="home-title"><a href="#birthday" class="home-link" data-toggle="tab">BirthDay</a></li>
<li class=" home-title"><a href="#wedding" class="home-link" data-toggle="tab">Wedding</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane active" id="birthday">
<div class="group-product">
  <div class="row">

      @foreach($getBirthDay->shuffle() as $product)
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

   <!-- row end           -->
</div>
</div>
<div class="tab-pane" id="wedding">
<div class="group-product">
  <div class="row">
      @foreach($getWeeding->shuffle() as $product)
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

   <!-- row end           -->
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<div class="banner">
<div class="gift-card">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                      <a href="" class="gift-img">
                        <img src="image/banner.jpg" class="img-fluid" >
                      </a>
                    </div>
                </div>
                </div>
</div>
</div>




<div class="Love">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="decor-title">
                   <h2 class="other-title" id="Love">Love & Rommance</h2>
              </div>
          </div>
        </div>
        <div class="group-product">
              <div class="row">

                  @foreach($getLove->shuffle() as $product)
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
   <!-- row end-->
        </div>  
    </div>
</div>



<div class="Congrats">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="decor-title">
                   <h2 class="other-title" id="Congrats">Congrats</h2>
              </div>
          </div>
        </div>
        <div class="group-product">
              <div class="row">
                  @foreach($getCongo->shuffle() as $product)
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
   <!-- row end-->
        </div>  
    </div>
</div>
</div>
</div>
@endsection











