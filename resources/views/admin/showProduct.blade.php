@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="viewproduct">
            <div class="col-md-12">
                @if(session('addSuccess'))
                    <p class="alert alert-success">{{ session('addSuccess') }}</p>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product Id</th>
                            <th scope="col-4">Product Image</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Discount</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allProduct as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>
                                <img src="{{ asset('img/product/'.$product->picture) }}" class="table-img">
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>
                                <a href="{{ url('auth/product/edit/'.$product->id) }}" class="btn btn-primary" >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('auth/product/delete/'.$product->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection