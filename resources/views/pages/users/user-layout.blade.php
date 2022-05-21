@extends('layouts.main-2')
@section('content')

<div id="interface-user">
    <h1>Compte client</h1>
    <div id="interface-menu">
        <a href="/user/{{$user->id}}/edit"><h2>Mes données personnelles</h2></a>
        <a href="/user/{{$user->id}}"><h2>Mes commandes</h2></a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" name="logout" value="Se déconnecter">
        </form>

        <form action="/user/{{ $user->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer mon compte" name="Delete">
        </form>
    </div>
</div>

@yield('user-data')

@endsection