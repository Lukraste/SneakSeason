 @extends('layout')
 @section('content')

 <div class="products">
    <a href="/nouveautes"><h1>Nouveautés</h1></a>
    <div class="products-list">

        @foreach($new_products->take(8) as $product)
        <div>
            <div class="product-one">
                <a class="relative overflow-hidden bg-no-repeat bg-cover max-w-xs" id="image" href="/products/{{$product->id}}">
                    <img class="max-w-xs hover:scale-125 transition duration-500 ease-in-out" src="{{asset('storage/images/products/'.$product->images->first()->path)}}" alt="Nike air-force-1-low-wheat-mocha">
                </a>
            </div>
            <button href="/products/{{$product->id}}">Voir le produit</button>
            <a href="/products/{{$product->id}}">{{$product->name}}</a>
            <br>
            <a class="brand-name" href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
            <p> {{$product->price_vat}} €</p>
        </div>
        @endforeach
        
    </div>
    <a href="/nouveautes" id="show-more">Voir plus</a>
</div>

<div class="brand">
    <a href="/brands/{{$brand_nike->id}}" id="brand-image"><img src="{{asset('storage/images/banners/nike-banner.jpg')}}" alt="nike-banner"></a>
    <div id="informations">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elementum
            ipsum aliquam mattis. Nulla porttitor sed velit at sodales. Vestibulum ante ipsum primis
            in faucibus orci luctus et ultrices posuere cubilia curae; Nulla in lectus ante. Nam pharetra
            eros ac dolor eleifend dictum.
        </p>
        <a href="/brands/{{$brand_nike->id}}">Découvrir notre collection Nike</a>
    </div>
</div>

{{-- Affichage de la liste des products tendances, 8 élements --}}

<div class="products">
    <a href="tendances"><h1>Tendances</h1></a>
    <div class="products-list">
        @foreach($popular_products->take(8) as $product)
            <div class="product-one">
                <a id="image" href="/products/{{$product->id}}">
                <img src="{{ asset('storage/images/products/'.$product->images->first()->path) }}" alt="Nike air-force-1-low-wheat-mocha">
                </a>
                <a href="/products/{{$product->id}}">{{$product->name}}</a>
                <a class="brand-name" href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
                <p>{{$product->price_vat}} €</p>
                <a href="/products/{{$product->id}}" id="call-to-action">Commander</a>
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
        <a href="/brands/{{$brand_adidas->id}}">Découvrir notre collection Adidas</a>
    </div>
    <a href="/brands/{{$brand_adidas->id}}" id="brand-image"><img src="{{asset('storage/images/banners/adidas-banner.jpg')}}" alt="nike-banner"></a>
</div>
@endsection