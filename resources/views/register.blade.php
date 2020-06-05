@extends('layouts.master')

@section('title','Register')

@section('content')
    <hr>
    <div class="login">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="signup-field">
                    @include('errors.error')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username here..." name="username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="example@mail.com" name="email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="mobile number" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="enter 8 digit password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="confirm 8 digit password" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="3"></textarea>
                        </div>


                    <input class="btn btn-login" type="submit" name="submit" value="Sign Up">
                    </form>
                    <a href="login.html" class="login-extra">Already have an account Login here</a>
                </div>
            </div>
        </div>
    </div>
@endsection