<!DOCTYPE html>
<html>
@extends('layout.head')

<body>
    <form action="" method="post">
        @csrf
        <p>Nhap Name</p>
        <input type="text" name="name">
        <p>Nhap Age</p>
        <input type="text" name="age">
        <p>Nhap Mail</p>
        <input type="text" name="mail">
        <p>Nhap Phone</p>
        <input type="text" name="phone">
        <p>Nhap Web</p>
        <input type="text" name="web">
        <p>Nhap Address</p>
        <input type="text" name="address">
        <button type="submit" name="OK"> OK</button>
        @include('blocks.error');
    </form>
    @if(isset($user))
    <p>Name{{$user['name']}}</p>
    <p>Age: {{$user['age']}}</p>
    <p>Phone: {{$user['phone']}}</p>
    <p>Website: {{$user['web']}}</p>
    <p>Address: {{$user['address']}}</p>
    @endif
</body>

</html>
