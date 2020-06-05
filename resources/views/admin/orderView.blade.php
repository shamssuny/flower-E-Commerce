@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="order-details">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <div>Order Id: #{{ $getOrder->id }}</div>
                    </div>
                </div>
            </div>
            <div class="shipping-details">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-details">
                            <h4>Contact Details</h4>
                            <div class="para">
                                <p>Name : {{ $getUser->username }}</p>
                                <p>Email: {{ $getUser->email }}</p>
                                <p>Phone: {{ $getUser->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-desc">
                            <h4>Order Details</h4>
                            <div class="para">
                                <p>Order Date: {{ $getOrder->date }}</p>
                                <p>Order Id: order#{{ $getOrder->id }}</p>
                                <p>Order Status: <span class="
@if($getOrder->status == 'delivered')
complete
                                    @else
                                            pending
                                    @endif
">{{ $getOrder->status }}</span></p>
                                <p>Payment Status: <span class="complete">Complete</span></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-desc">
                            <h4>Product Details</h4>
                            <div class="para">
                                <p>Product Id: product#{{ $getOrder->product_id }}</p>
                                <p>Product Name: {{ \App\Product::find($getOrder->product_id)->name }}</p>
                                <p>Product Qty: {{ $getOrder->quantity }}</p>
                                <p>Total Price: ${{ $getOrder->total_price }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shipping">
                            <h4>Shipping Address</h4>
                            <div class="para">
                                <p>City: {{ $getShip->city }}</p>
                                <p>State: {{ $getShip->state }} </p>
                                <p>Street: {{ $getShip->street }}</p>
                                <p>Country: {{ $getShip->country }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-desc">
                            <h4>Payment Details</h4>
                            <div class="para">
                                {{--<p>Transaction Id: product#1231</p>--}}
                                <p>Payment Method: {{ $getOrder->payment_method }}</p>
                                <p>Product Price: ${{ $getOrder->total_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection