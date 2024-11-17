@extends('layouts.layout')

@section('content')

<h1>{{ $role->name }}</h1>

<ul>
    @foreach ($role->permissions as $permission)
    <li>{{ $permission->name }}</li>
    @endforeach
</ul>



@endsection
