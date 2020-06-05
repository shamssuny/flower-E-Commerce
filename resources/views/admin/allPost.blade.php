@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="viewproduct">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Post Category</th>
                            <th scope="col-4">Post Image</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Post  Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allPost as $post)
                        <tr>
                            <th scope="row">{{ $post->category }}</th>
                            <td>
                                <img src="{{ asset('img/posts/'.$post->picture) }}" class="table-img">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ str_limit($post->description,20) }}. . . </td>
                            <td>{{ $post->created_at->toDateString() }}</td>
                            <td>
                                <a href="{{ url('auth/post/edit/'.$post->id ) }}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('auth/post/delete/'.$post->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $allPost->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection