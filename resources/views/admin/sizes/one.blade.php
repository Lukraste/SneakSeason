@extends('admin.layout')

@section('admin-data')

<li>
    <a href="/admin/sizes/{{$size->id}}">{{$size->size}}</a>
    <br>
    <button><a href="/admin/sizes/{{$size->id}}/edit">Modifier</a></button>
    <form action="/admin/sizes/{{$size->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="Delete">
    </form>
    <br>
    <p>Sneakers :</p>
    <ul>
        @foreach($size->sneakers as $sizeSneaker)
        <li><a href="/admin/sneakers/{{$sizeSneaker->id}}">{{$sizeSneaker->name}}</a></li>
    @endforeach
    </ul>
    <br>
</li>
