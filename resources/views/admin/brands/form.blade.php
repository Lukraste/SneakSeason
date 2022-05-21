@extends('admin.layout')

@section('admin-data')

@if(isset($brand))
<form action="/admin/brands/{{$brand->id}}" method="post">
    @csrf
    @method('put')
    <fieldset>
        <legend>Modifier une marque</legend>
@else
<form action="/admin/brands" method="post">
    @csrf
    <fieldset>
        <legend>Ajouter une marque</legend>
@endif
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{isset($brand) ? $brand->name : ''}}">
        <br>
        <select name="sneakers[]" multiple>
            @foreach($sneakers as $sneaker)
                <option value="{{$sneaker->id}}" 
                    @if(isset($brand))
                        @foreach($brand->sneakers as $brandSneaker)
                            {{($brandSneaker->id === $sneaker->id) ? 'selected' : '' }} 
                        @endforeach
                    @endif
                    >{{$sneaker->name}}
                </option>
            @endforeach
        </select>
        <br>
        <input type="submit" name="submit" value="{{isset($brand) ? 'Modifier' : 'Ajouter'}}">
    </fieldset>
</form>

 @endsection