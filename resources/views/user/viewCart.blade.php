@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title cl-red">Cart</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(session('cartMsg'))
                        <p class="alert alert-warning">{{ session('cartMsg') }}</p>
                    @endif
                        @if(session('cartError'))
                            <p class="alert alert-warning">{{ session('cartError') }}</p>
                        @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Flower Id</th>
                                <th scope="col">Flower Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="{{ url('cart/update') }}" method="post">
                                {{ csrf_field() }}
                            @if($getCart!=null)
                            @foreach($getCart as $cart)
                            <tr>
                                <th scope="row">{{ $cart['product_id'] }}</th>
                                <td>{{ \App\Product::find($cart['product_id'])->name }}</td>
                                <td>
                                    <input type="hidden" name="id[]" value="{{ $cart['id'] }}">
                                    <input class="small-input" type="number" value="{{ $cart['quantity'] }}" min="1" max="100" name="quantity[]">
                                </td>
                                <td>{{ $cart['price'] }}</td>
                                <td>
                                    <a href="{{ url('cart/delete/'.$cart['id']) }}" class="btn btn-danger" id="cart-remove">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                    <h5>+Vat</h5>
                                    <h5 class="item-total">Total</h5>
                                </td>
                                <td>
                                    <h5>${{ session()->get('subtotal') }}</h5>
                                    <h5>{{ \App\Vat::first()->vat }}%</h5>
                                    <h5>${{ session()->get('totalWithVat') }}</h5>
                                    <input style="margin-top: 50px;" type="submit" name="submit" value="update" class="btn btn-warning">
                                    <a href="{{ url('cart/checkout') }}" class="btn btn-danger" id="checkout">Checkout</a>
                            </form>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection