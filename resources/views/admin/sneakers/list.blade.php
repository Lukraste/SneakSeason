@extends('admin.layout')

@section('admin-data')

<h1>Liste des sneakers</h1>
<ol>
    @foreach($sneakers as $sneaker)
    <li>
        <a href="/admin/sneakers/{{$sneaker->id}}">{{$sneaker->name}}</a>
        <br>
        <br>
        <a href="/admin/brands/{{$sneaker->brand->id}}">{{$sneaker->brand->name}}</a>
        <br>
        <p>Genre : {{$sneaker->sex}}</p>
        <p>Prix : {{$sneaker->priceVAT}} €</p>
        <p>Code bar : {{$sneaker->bar_code}}</p>
        <p>Tailles disponibles : 
        @foreach($sneaker->sizes->sort() as $sneakerSize)
            {{$sneakerSize->size}},
        @endforeach
        </p>
        <br>
        <button><a href="/admin/sneakers/{{$sneaker->id}}/edit">Modifier</a></button>
        <form action="/admin/sneakers/{{ $sneaker->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" name="Delete">
        </form>
    </li>
    <br>
    @endforeach
</ol>

@endsection
