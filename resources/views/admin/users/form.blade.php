@extends('admin.layout')

@section('content')

@if(isset($user))
<form action="/admin/users/{{$user->id}}" method="post">
    @csrf
    @method('put')
    <fieldset>
        <legend>Modifier un utilisateur</legend>
@else
<form action="/admin/users" method="post">
    @csrf
    <fieldset>
        <legend>Ajouter un utilisateur</legend>
@endif
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{isset($user) ? $user->name : ''}}">
        <br>
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" value="{{isset($user) ? $user->firstname : ''}}">
        <br>
        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" value="{{isset($user) ? $user->email : ''}}">
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" value="{{isset($user) ? $user->password : ''}}">
        <br>
            <select name="sneakers[]" multiple>
                @foreach($sneakers as $sneaker)
                    <option value="{{$sneaker->id}}"
                        @if(isset($user))
                            @foreach($user->sneakers as $userSneaker)
                            {{$userSneaker->id === $sneaker->id ? 'selected' : ''}}
                            @endforeach
                        @endif
                        >{{$sneaker->name}}</option>
                @endforeach
            </select>
            <br>
        <input type="submit" name="submit" value="{{isset($user) ? 'Modifier' : 'Ajouter'}}">
    </fieldset>
</form>

@endsection