@extends('layouts.main-2')
@section('content')

<div id="sneaker-one">

    <div id="top-infos">
        <img src="{{asset('images/sneakers/air-force-1-low-wheat-mocha-1.png')}}" alt="air-force-1-low-wheat-mocha-1">
        <div id="sneaker-infos">
            <h1>{{ $sneaker->name }}</h1>
            <h2>{{ $sneaker->brand->name }}</h2>
            <h2> {{$sneaker->sex === 'm' ? 'homme' : 'femme'}}</h2>
            <h2>{{ $sneaker->priceVAT }} € TTC</h2>

            <form action="/order/create" method="post">
                @csrf
                <label for="size_id">Tailles disponibles :</label>
                <select name="size_id">
                    @foreach($sneaker->sizes->sort() as $sneakerSize)
                        <option value="{{$sneakerSize->size}}">{{$sneakerSize->size}} - {{$sneakerSize->type}}</option>
                    @endforeach
                </select>
                <label for="quantity">Quantité :</label>
                <input type="number" value="1" min="1" max="10" name="quantity">
                <input type="submit" value="Commander">
            </form>
        </div>
    </div>

    <div id="bottom-infos">
        <h2>Description du modèle</h2>
        <p>
            {{$sneaker->description}}
        </p>
    </div>
</div>

<div class="sneakers">
    <h1><u>Produits similaires</u></h1>
    <div class="sneakers-list">
        @foreach($sneakers->take(4) as $sneaker)
            <div id="produits-similaires" class="sneakers-one">
                <a id="image" href="/sneakers/{{$sneaker->id}}">
                <img src="{{asset('images/sneakers/air-force-1-low-wheat-mocha-1.png')}}" alt="Nike air-force-1-low-wheat-mocha">
                </a>
                <a href="/sneakers/{{$sneaker->id}}">{{$sneaker->name}}</a>
                <a class="brand-name" href="/brands/{{$sneaker->brand->id}}">{{$sneaker->brand->name}}</a>
                <p>{{$sneaker->priceVAT}} €</p>
                <a href="/sneakers/{{$sneaker->id}}" id="call-to-action">Commander</a>
                </div>
        @endforeach
    </div>
</div>
@endsection


