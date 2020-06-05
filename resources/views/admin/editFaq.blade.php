@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="alert alert-primary m-2">
            Create a FAQ
        </div>
        <div class="col-md-8 offset-md-1">
            <div class="form-post">
                <form action="" method="POST">
                    {{ csrf_field() }}
                    @include('errors.error')
                    @if(session('updateSuccess'))
                        <p class="alert alert-success">{{ session('updateSuccess') }}</p>
                    @endif
                    <input type="hidden" name="id" value="{{ $faq->id }}">
                    <div class="form-group">
                        <label>Questions Here</label>
                        <input type="text" class="form-control" name="title" value="{{ $faq->title }}">
                    </div>
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea class="form-control" rows="5" name="details">{{ $faq->details }}</textarea>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection