@extends('admin.layout')

@section('admin-data')
<li>
    <a href="/admin/users/{{$user->id}}">{{$user->name}} - {{$user->firstname}}</a>
    <br>
    {{$user->email}}
    <br>
    <p>Admin : {{$user->admin}}</p>
    <br>
    <form action="/admin/users/{{ $user->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="Delete">
    </form>
</li>


@endsection


