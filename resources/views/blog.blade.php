@extends('layouts.master')

@section('title','Blog')

@section('content')
    <div class="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">Blog</h2>
                </div>
            </div>
            @foreach($blog as $b)
            <div class="row">
                <div class="col-md-12">

                    <div class="blog-featured">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/posts/'.$b->picture) }}" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h4 class="txt-start">{{ $b->title }} </h4>
                                <p class="justify">
                                    {{ $b->description }}
                                </p>
                                <a href="{{ url('blog/view/'.$b->id) }}" class="btn btn-small btn-primary fl-left">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            {{ $blog->links() }}
        </div>
    </div>
@endsection