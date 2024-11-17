@extends('layouts.layout')

@section('content')
@if (session('success'))
<p>{{session('success')}}</p>

@endif

<a href="{{route('permission.create')}}">creer</a>
<table>
    <tr>
        <th>Title</th>
        <th>action</th>
    </tr>

    @foreach ($permissions as $permission)
    <tr>
    <td>{{$permission->name}}</td>
    <td>{{$permission->description}}</td>
    <td>
        <a href="{{route('permission.show',$permission)}}">voir plus</a>


        <a href="{{route('permission.edit',$permission)}}">edit</a>
        <form action="{{route('permission.destroy',$permission)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </td>

    </tr>
    @endforeach



</table>

@endsection
