@extends('layouts.main-2')

@section('content')

<div class="brand-one">
    <img id="brand-image" src="{{asset("$brand->image")}}" alt="{{$brand->name}}-logo">
    <div class="sneakers">
        <h3>Quantité : {{$brand->sneakers->count()}}</h3>
        <div class="sneakers-list">
            @foreach($brand->sneakers as $brandSneaker)
                <div class="sneakers-one">
                    <a id="image" href="/sneakers/{{$brandSneaker->id}}">
                        <img src="{{asset('images/sneakers/air-force-1-low-wheat-mocha-1.png')}}" alt="Nike air-force-1-low-wheat-mocha">
                    </a>
                    <a href="/sneakers/{{$brandSneaker->id}}">{{$brandSneaker->name}}</a>
                    <a class="brand-name" href="/brands/{{$brandSneaker->brand->id}}">{{$brandSneaker->brand->name}}</a>
                    <p>{{$brandSneaker->priceVAT}} €</p>
                    <a href="/sneakers/{{$brandSneaker->id}}" id="call-to-action">Commander</a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection




