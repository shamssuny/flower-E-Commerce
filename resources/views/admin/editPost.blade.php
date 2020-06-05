@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="alert alert-primary m-2">
            Create a post
        </div>
        <div class="col-md-8 offset-md-1">
            <div class="form-post">
                @include('errors.error')
                @if(session('updateSucc'))
                    <p class="alert alert-success text-center">{{ session('updateSucc') }}</p>
                @endif
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $getPost->id }}">
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $getPost->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="5" name="description">{{ $getPost->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" class="form-file-input" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Page Name || Current: {{ $getPost->category }} </label>
                        <select class="custom-select" name="category">
                            @php
                                $page = array('support','blog','event','about','contact');
                            @endphp

                            @foreach($page as $a)
                                @if($getPost->category == $a)
                                    <option value="{{ $a }}" selected>{{ $a }}</option>
                                @else
                                    <option value="{{ $a }}">{{ $a }}</option>
                                @endif
                            {{--<option value="" selected >Choose a page</option>--}}
                            {{--<option value="support">Support</option>--}}
                            {{--<option value="blog">Blog</option>--}}
                            {{--<option value="event">Events</option>--}}
                            {{--<option value="about">About Us</option>--}}
                            {{--<option value="contact">Contact Us</option>--}}
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary my-4">
                </form>

            </div>
        </div>
    </div>
@endsection