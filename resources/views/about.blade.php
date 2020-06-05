@extends('layouts.master')

@section('title','About')

@section('content')
    <div class="page-item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title cl-red">About Us</h2>
                </div>
            </div>
            @foreach($about as $a)
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/posts/'.$a->picture) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h3>{{ $a->title }}</h3>
                    <p>{{ $a->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection