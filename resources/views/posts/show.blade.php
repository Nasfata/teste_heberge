@extends('layouts.layout')

@section('content')

<h1>{{ $post->title }} {{ $post->content }} {{ $post->user->name }}</h1>

@endsection
