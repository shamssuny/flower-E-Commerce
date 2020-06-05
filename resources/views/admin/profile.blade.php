@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-3">
            @include('errors.error')
            @if(session('updateError'))
                <p class="alert alert-danger">{{ session('updateError')  }}</p>
            @endif
            @if(session('updateSuccess'))
                <p class="alert alert-success">{{ session('updateSuccess')  }}</p>
            @endif
            <form class="user-edit" action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="your full name" value="{{ $admin->full_name }}" name="full_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $admin->email }}" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Password*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Old Password" name="prev_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="New Password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Upload Image</label>
                    <input type="file" class="form-file-input" name="picture">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection