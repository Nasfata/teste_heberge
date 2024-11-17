@extends('layouts.layout')

@section('content')
@if (session('success'))
<p>{{session('success')}}</p>

@endif

<a href="{{route('posts.create')}}">creer</a>

<table>
    <tr>
        <th>Title</th>
        <th>user</th>
        <th>action</th>
    </tr>

    @foreach ($posts as $post)
    <tr>
    <td>{{$post->title}}</td>


    <td>
        {{ $post->user->name }}
    </td>


    <td>
        <a href="{{route('posts.show',$post)}}">voir plus</a>


        <a href="{{route('posts.edit',$post)}}">edit</a>
        <form action="{{route('posts.destroy',$post)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </td>

    </tr>
    @endforeach



</table>

@endsection
