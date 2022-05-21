@extends('admin.layout')

@section('admin-data')

@if(isset($sneaker))
<form action="/admin/sneakers/{{$sneaker->id}}" method="post">
    @csrf
    @method('put')
    <fieldset>
        <legend>Modifier une paire de sneakers</legend>
@else
<form action="/admin/sneakers" method="post">
    @csrf
    <fieldset>
        <legend>Ajouter une paire de sneakers</legend>
@endif
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{isset($sneaker) ? $sneaker->name : ''}}">
        <br>
        <label for="brand_id">Marque :</label>
        <select name="brand_id">
            @foreach($brands as $brand)
                <option value="{{$brand->id}}"
                     {{isset($sneaker) && $sneaker->brand_id === $brand->id ? 'selected' : ''}}
                >{{$brand->name }}</option>
            @endforeach
        </select>
        <br>

        <label for="sex">Femme</label>
        <input type="radio"  name="sex" value="f"
            {{isset($sneaker) && $sneaker->sex == 'f'  ? 'checked' : ''}}>

        <label for="sex">Homme</label>
        <input type="radio"  name="sex" value="m"
             {{isset($sneaker) && $sneaker->sex == 'm' ? 'checked' : ''}}>
        <br>

        <select name="sizes[]" multiple>
            @foreach($sizes as $size)
                <option value="{{$size->id}}"
                    @if(isset($sneaker))
                        @foreach($sneaker->sizes as $sneakerSize)
                            {{$sneakerSize->id === $size->id ? 'selected' : '' }} 
                        @endforeach
                    @endif
                    >{{$size->size}}</option>
            @endforeach
        </select>
        <br>
        <label for="priceVAT">Prix :</label>
        <input type="number" name="priceVAT" value="{{isset($sneaker) ? $sneaker->priceVAT : '' }}" min=1>
        <br>

        <label for="bar_code">Code bar :</label>
        <input type="number" name="bar_code" value="{{isset($sneaker) ? $sneaker->bar_code : '' }}">
        <br>
        <input type="submit" name="submit" value="{{isset($sneaker) ? 'Modifier' : 'Ajouter'}}">
    </fieldset>
</form>

@endsection