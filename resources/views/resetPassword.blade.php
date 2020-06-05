@extends('layouts.master')

@section('title','Reset Password')

@section('content')
    <hr>
    <div class="login">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="login-field">
                    @if(session('resetSuccess'))
                        <p class="alert alert-success">{{ session('resetSuccess') }}</p>
                    @endif
                        @if(session('resetError'))
                            <p class="alert alert-success">{{ session('resetError') }}</p>
                        @endif
                    @include('errors.error')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Input Your Email</label>
                            <input type="text" class="form-control" placeholder="Email here..." name="email">
                        </div>
                        <input class="btn btn-login" type="submit" name="submit" value="Reset Password">
                    </form>
                    <a href="{{ url('/login') }}" class="login-extra">Or, Goto Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection