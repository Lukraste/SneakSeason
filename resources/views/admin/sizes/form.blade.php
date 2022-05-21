@extends('admin.layout')

@section('admin-data')

@if(isset($size))
<form action="/admin/sizes/{{$size->id}}" method="post">
    @csrf
    @method('put')
    <fieldset>
        <legend>Modifier une taille</legend>
@else
<form action="/admin/sizes" method="post">
    @csrf
    <fieldset>
        <legend>Ajouter une taille</legend>
@endif
        <label for="size">Taille :</label>
        <input type="number" name="size" min="0" value="{{isset($size) ? $size->size : ''}}">
        <br>
        <select name="sneakers[]" multiple>
            @foreach($sneakers as $sneaker)
                <option value="{{$sneaker->id}}"
                    @if(isset($size))
                         @foreach($size->sneakers as $sizeSneaker)
                           {{$sizeSneaker->id === $sneaker->id ? 'selected' : ''}}
                         @endforeach
                    @endif
                >{{$sneaker->name }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" name="submit" value="{{isset($size) ? 'Modifier' : 'Ajouter'}}">
    </fieldset>
</form>

@endsection