@extends('layouts.master')

@section('title','Confirm Reset')

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
                            <label>New Password</label>
                            <input name="password" type="password" class="form-control" placeholder="enter 8 digit password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="enter 8 digit password">
                        </div>
                        <input class="btn btn-login" type="submit" name="submit" value="Reset Password">
                    </form>
                    <a href="{{ url('/login') }}" class="login-extra">Or, Goto Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection