@extends('layouts.master')
@section('content')
    <form >
        Name: <input name="name" type="text" placeholder="input your name">
        <br>
        Email <input type="text" placeholder="input your email" name="email">
        <br>
        Password <input type="text" placeholder="password" name="password">
        <button type="submit" class="btn btn-primary">Update</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
@stop
