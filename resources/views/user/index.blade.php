<!--fghjk-->
@extends('layouts.layout')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>

@endif
<a href="{{ route('user.create') }}">creer</a>

<table>
    <tr>
        <th>Name</th><th>post</th><th>Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>

        @foreach ($user->posts as $post)
        <td>{{ $post->title }}</td>
        @endforeach

        <td>
            <a href="{{ route('user.show',$user) }}">voir plus</a>
            <a href="{{ route('user.edit',$user) }}">edit</a>


            <form action="{{ route('user.destroy',$user) }}" method="post" style="display: inline-flex">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" onclick="return confirm('vous souhaiter suprimer ?')">
            </form>
        </td>

    </tr>
    @endforeach
</table>

@endsection
