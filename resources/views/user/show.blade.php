<!--hjk-->
@extends('layouts.layout')
@section('content')

<h1>{{ $user->name }}</h1>

@foreach ($user->posts as $post)
<strong>{{ $post->name }},</strong>
@endforeach

@foreach ($user->roles as $role)
<strong>{{ $role->name }},</strong>
@endforeach

@endsection
