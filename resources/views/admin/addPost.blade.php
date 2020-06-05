@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="alert alert-primary m-2">
            Create a post
        </div>
        <div class="col-md-8 offset-md-1">
            <div class="form-post">
                @if(session('addSuc'))
                    <p class="alert alert-success">{{ session('addSuc') }}</p>
                @endif
                @include('errors.error')
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" class="form-file-input" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Page Name</label>
                        <select class="custom-select" name="category">
                            <option value="" selected >Choose a page</option>
                            <option value="support">Support</option>
                            <option value="blog">Blog</option>
                            <option value="event">Events</option>
                            <option value="about">About Us</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary my-4">
                </form>

            </div>
        </div>
    </div>
@endsection