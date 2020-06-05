@extends('layouts.admin')

@section('content')
    <div class="container">
    <div class="viewproduct">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Id</th>
                        <th scope="col">Customer Id</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->product_id }}</th>
                        <td>{{ $order->user_id }}</td>
                        <td>
                            <img src="{{ asset('img/product/'.\App\Product::find($order->product_id)->picture ) }}" class="table-img">
                        </td>
                        <td>${{ $order->total_price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->date }}</td>
                        <td>
                            @if($order->status == 'pending')
                                <span class="pending">Pending</span>
                            @elseif($order->status == 'delivered')
                                <span class="complete">Delivered</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('auth/order/update/'.$order->id ) }}" class="btn btn-success" title="details">
                                <i class="fa fa-check"></i>
                            </a>
                            <a href="{{ url('auth/order/view/'.$order->id) }}" class="btn btn-primary" title="details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ url('auth/order/delete/'.$order->id) }}" class="btn btn-danger" title="delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
    </div>
@endsection