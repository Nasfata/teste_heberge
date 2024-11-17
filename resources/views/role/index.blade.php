@extends('layouts.layout')

@section('content')
@if (session('success'))
<p>{{session('success')}}</p>

@endif

<a href="{{route('role.create')}}">creer</a>
<table>
    <tr>
        <th>Title</th>
        <th>action</th>
    </tr>

    @foreach ($roles as $role)
    <tr>
    <td>{{$role->name}}</td>
    <td>
        <a href="{{route('role.show',$role)}}">voir plus</a>


        <a href="{{route('role.edit',$role)}}">edit</a>
        <form action="{{route('role.destroy',$role)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </td>

    </tr>
    @endforeach



</table>

@endsection
