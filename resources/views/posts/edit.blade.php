@extends('layouts.layout')

@section('content')

<form action="{{route('posts.update',$post)}}" method="post">
    @csrf
    @method('PUT')
    <label for="title">title</label><input type="text" name="title" id="title" value="{{$post->title}}">
    <label for="content">content</label><input type="text" name="content" id="content" value="{{$post->content}}">
    <input type="submit" value="update">
</form>
    
@endsection