@extends('layouts.layout')

@section('content')

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="title">title</label><input type="text" name="title" id="title">
    <label for="content">content</label><input type="text" name="content" id="content">
    <input type="submit" value="creer">
</form>
    
@endsection