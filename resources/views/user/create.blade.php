@extends('layouts.master')
@section('content')
    <form action="{{route('user.store')}}" method="post">
        @csrf
        Name: <input name="name"  type="text" placeholder="input your name">
        <br>
        Email <input type="text" placeholder="input your email" name="email">
        <br>
        Password <input type="text" placeholder="password" name="password">
        <input type="submit" value="Add new">
    </form>

@endsection