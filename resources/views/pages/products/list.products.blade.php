@extends('layouts.main-2')
@section('content')

<div class="sneakers">
    <h1>{{ isset($category) ? $category->name : 'Toutes les sneakers'}}</h1>
    <div class="sneakers-list">
        @foreach($sneakers as $sneaker)
            <div class="sneakers-one">
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