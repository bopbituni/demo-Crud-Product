@extends('layouts.master')

@section('content')
    <div class="container">
        <button></button>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($users as $key => $user)
                            <td>{{++$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{route('user.delete')}}">Delete</a>
                                <a class="btn btn-primary" href="{{route('user.edit', $user->id)}}" >Edit</a>
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.container -->
@stop
