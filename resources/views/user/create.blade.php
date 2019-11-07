<<<<<<< HEAD
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
=======
<form>
Name: <input name="name"  type="text" placeholder="input your name">
    <br>
    Email <input type="text" placeholder="input your email" name="email">
    <br>
    Password <input type="text" placeholder="password" name="password">
    <button type="submit" class="btn btn-primary">Update</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
</form>
>>>>>>> c1323468bd4e509c39be2377ce98134962c15852
