@extends('layouts.master')

@section('title','Faq')

@section('content')
    <div class="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="questions">

                        <div class="accordion">
                            @foreach($faq as $f)
                            <h1>{{ $f->title }}</h1>
                            <div>
                                <p>{{ $f->details }}</p>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('js/woco.accordion.min.js') }}"></script>
<script>
    $(".accordion").accordion();
</script>

<script>
    $('input[name=exampleRadios]').change(function(){
        var v = $('input[name=exampleRadios]:checked').val();
        if(v == 'option1'){
            window.location.assign("/cart/checkout/ship/normal");
        }if(v == 'option2'){
            window.location.assign("/cart/checkout/ship/express");
        }
    });
</script>
@endpush

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/woco-accordion.min.css') }}">
@endpush