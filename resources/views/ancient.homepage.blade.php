@extends('layouts')
@section('content')

<div class="sneakers">
    <a href="/nouveautes"><h1>Nouveautés</h1></a>
    <div class="sneakers-list">

        @foreach($sneakers_news->take(8) as $sneaker)
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
    <a href="/nouveautes" id="show-more">Voir plus</a>
</div>

<div class="brand">
    <a href="/brands/{{$brand_Nike->id}}" id="brand-image"><img src="{{asset('images/banners/nike-banner.jpg')}}" alt="nike-banner"></a>
    <div id="informations">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elementum
            ipsum aliquam mattis. Nulla porttitor sed velit at sodales. Vestibulum ante ipsum primis
            in faucibus orci luctus et ultrices posuere cubilia curae; Nulla in lectus ante. Nam pharetra
            eros ac dolor eleifend dictum.
        </p>
        <a href="/brands/{{$brand_Nike->id}}">Découvrir notre collection Nike</a>
    </div>
</div>

{{-- Affichage de la liste des sneakers tendances, 8 élements --}}

<div class="sneakers">
    <a href="tendances"><h1>Tendances</h1></a>
    <div class="sneakers-list">
        @foreach($sneakers_trends->take(8) as $sneaker)
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
    <a href="/tendances" id="show-more">Voir plus</a>
</div>

{{-- Bannière de la marque Adidas --}}

<div class="brand">
    <div id="informations">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra semper neque nec porttitor.
            Sed eget orci augue. Nam nisi massa, semper eget metus condimentum, ullamcorper dapibus elit.
            Maecenas venenatis massa eu lacinia pharetra. Curabitur hendrerit nisi sapien, vel varius leo consequat
            vel. Phasellus commodo nisl et aliquet rutrum..
        </p>
        <a href="/brands/{{$brand_Adidas->id}}">Découvrir notre collection Adidas</a>
    </div>
    <a href="/brands/{{$brand_Adidas->id}}" id="brand-image"><img src="{{asset('images/banners/adidas-banner.jpg')}}" alt="nike-banner"></a>
</div>
@endsection