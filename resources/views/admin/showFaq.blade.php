@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="viewproduct">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Faq Id</th>
                            <th scope="col">Faq Question</th>
                            <th scope="col">Faq  Answer</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($getFaq as $faq)
                        <tr>
                            <th scope="row">{{ $faq->id }}</th>
                            <td>{{ $faq->title }}</td>
                            <td>{{ str_limit($faq->details,'10') }}...</td>
                            <td>{{ $faq->created_at->toDateString() }}</td>
                            <td>
                                <a href="{{ url('auth/faq/edit/'.$faq->id) }}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('auth/faq/delete/'.$faq->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection