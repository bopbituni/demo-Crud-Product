@extends('layouts.master')
@section('content')
    <form method="post" action="{{route('user.update', $user->id)}}">
        @csrf
        Name: <input name="name"  type="text" placeholder="input your name" value="{{$user->name}}">
        <br>
        Email <input type="text" placeholder="input your email" name="email" value=""{{$user->email}}>
        <br>
        Password <input type="text" placeholder="password" name="password" value="{{$user->password}}">
        <input type="submit" value="Edit new">
    </form>

@endsection