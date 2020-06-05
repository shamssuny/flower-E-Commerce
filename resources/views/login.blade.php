@extends('layouts.master')

@section('title','login');

@section('content')
    <hr>
    <div class="login">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="login-field">
                    @if(session('LoginSuccess'))
                        <p class="alert alert-success">{{ session('LoginSuccess') }}</p>
                    @endif
                        @if(session('LoginError'))
                            <p class="alert alert-danger">{{ session('LoginError') }}</p>
                        @endif
                        @if(session('cartError'))
                            <p class="alert alert-warning">{{ session('cartError') }}</p>
                        @endif
                    @include('errors.error')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username here..." name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="enter 8 digit password">
                        </div>
                        <input class="btn btn-login" type="submit" name="submit" value="Login">
                    </form>
                    <a href="{{ url('/register') }}" class="login-extra">Don't Have an account Signup</a>
                        <a href="{{ url('/resetPassword') }}" class="login-extra">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
@endsection