@extends('layouts.layout')

@section('content')

<form action="{{route('permission.store')}}" method="post">
    @csrf
    <label for="title">Name</label><input type="text" name="name" id="title">
    <input type="submit" value="creer">
</form>

@endsection
