@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-body">
                        <a class="btn btn-primary" href="{{route('createJob')}}">Create Job</a>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <th scope="row">{{ $job->id }}</th>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->description}}</td>
                                <td><a href="{{ route('editJob', $job->id) }}">Edit</a> <a href="{{ route('deleteJob', $job->id) }}">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection