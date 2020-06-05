@extends('layouts.master')

@section('title','Support')

@section('content')
    <div class="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">Support</h2>
                </div>
            </div>
            <div class="row">
                @foreach($support as $s)
                <div class="col-md-12">
                    <p class="justify">{{ $s->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection