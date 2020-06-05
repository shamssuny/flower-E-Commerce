@extends('layouts.master')

@section('title','Event')

@section('content')
    <div class="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">Events</h2>
                </div>
            </div>
            @foreach($event as $e)
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/posts/'.$e->picture) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="cl-red txt-start">{{ $e->title }}</h4>
                    <p class="justify">{{ $e->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="call">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="d-flex justify-content-around">
                    <div class="p-2">
                        <h5><i class="fa fa-phone"></i>  Call Us : +99002912</h5>
                    </div>
                    <div class="p-2">
                        <a href="contact.html" class="btn btn-warning">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection