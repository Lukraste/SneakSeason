@extends('admin.layout')

@section('admin-data')

<h1>Liste des Utilisateurs</h1>

 <ol>
    @foreach($users as $user)
    <li>
        <a href="/admin/users/{{$user->id}}">{{$user->name}} - {{$user->firstname}}</a>
        <p>{{$user->email}}</p> 

        @if($user->admin == 0)
            <p>Utilisateur</p>
            <form action="/admin/users/{{ $user->id }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer" name="Delete">
            </form>
        @else 
            <p>Administrateur</p>
        @endif

    </li>
    <br>
    @endforeach
</ol>

@endsection
