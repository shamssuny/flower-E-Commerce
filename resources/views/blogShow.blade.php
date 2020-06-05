@extends('layouts.master')

@section('title','Blog')

@section('content')
    <div class="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ url('img/posts/'.$post->picture) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="cl-red txt-start">{{ $post->title }}</h4>
                    <p class="justify">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection