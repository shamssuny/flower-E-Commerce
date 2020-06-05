@extends('layouts.master')

@section('title','Admin Login')

@section('content')
    <hr>
    <div class="login">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="login-field">
                    @include('errors.error')
                    @if(session('LoginError'))
                        <p class="alert alert-danger">{{ session('LoginError') }}</p>
                    @endif
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="admin username here..." name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="enter 8 digit password" name="password">
                        </div>
                        <input type="submit" name="submit" value="Admin Login" class="btn btn-login">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection