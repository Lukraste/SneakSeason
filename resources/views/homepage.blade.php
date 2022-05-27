 @extends('main-layout')
 @section('content')

 @include('components.carousel')

{{-- Affichage de la liste des nouveaux produits --}}

 <div class="products">
    <a href="{{ route('sneakers.news') }}">
        <h1>Nouveautés</h1>
    </a>
    <div class="products-list">
        @foreach($new_products->take(10) as $product)
            <div class="product-one">
                @foreach ($product->images->take(1) as $image)
                <a class="relative overflow-hidden bg-no-repeat bg-cover" id="image" href="{{ route('sneakers.show', ['slug' => $product->slug, 'id']) }}">
                    <img class="max-w-xs hover:scale-125 transition duration-500 ease-in-out" src="{{asset('storage/images/products/'.$image->path) }}" alt="{{ $product->slug }}">
                </a>
                @endforeach
                <div class="infos">
                    <div>
                        <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}"><p id="name">{{ $product->name }}</p></a>
                        <a href="{{ route('brands.show', ['slug' => $product->brand->slug]) }}"><p>{{ $product->brand->slug }}</p></a> 
                    </div>
                    <p id="price">{{ $product->price_vat}} €</p>
                </div>
                <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}" class="call-to-action">Réserver</a>
            </div>
        @endforeach
    </div>
    <a href="{{ route('sneakers.news') }}" class="show-more">Voir plus</a>
</div>

{{-- Bannière de la marque Nike --}}

<div class="brand">
    <a href="{{ route('brands.show', ['slug' => $brand_nike->slug]) }}"><img src="{{asset('storage/images/brands/banners/nike-banner.jpg')}}" alt="nike-banner"></a>
    <div id="informations">
        <p>
            Nike est une entreprise américaine spécialisée dans les chaussures, les vêtements et le matériel de sport.
            Nike est représenté par un logo simple et rapidement reconnaissable appelé le Swoosh, une virgule posée à l'envers et à l'horizontale.
            C’est une entreprise mondialement connu. Aujourd’hui, elle est bien plus représentée que son principal concurrent Adidas. Depuis 1981, Nike est numéro 1 de la chaussure aux Etats Unis
            Nombres de personnes qui suivent Nike sur Twitter, plus du double d’Adidas.
        </p>
        <a href="{{ route('brands.show', ['slug' => $brand_nike->slug]) }}" class="call-to-action">Découvrir notre collection Nike</a>
    </div>
</div>

{{-- Affichage de la liste des produits populaires --}}

<div class="products">
    <a href="{{ route('sneakers.popular') }}">
        <h1>Populaires</h1>
    </a>
    <div class="products-list">
        @foreach($popular_products->take(10) as $product)
            <div class="product-one">
                @foreach ($product->images->take(1) as $image)
                <a class="relative overflow-hidden bg-no-repeat bg-cover" id="image" href="{{ route('sneakers.show', ['slug' => $product->slug, 'id']) }}">
                    <img class="max-w-xs hover:scale-125 transition duration-500 ease-in-out" src="{{asset('storage/images/products/'.$image->path) }}" alt="{{ $product->slug }}">
                </a>
                @endforeach
                <div class="infos">
                    <div>
                        <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}"><p id="name">{{ $product->name }}</p></a>
                        <a href="{{ route('brands.show', ['slug' => $product->brand->slug]) }}"><p>{{ $product->brand->slug }}</p></a> 
                    </div>
                    <p id="price">{{ $product->price_vat}} €</p>
                </div>
                <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}" class="call-to-action">Réserver</a>
            </div>
        @endforeach
    </div>
    <a href="{{ route('sneakers.news') }}" class="show-more">Voir plus</a>
</div>

{{-- Bannière de la marque Adidas --}}

<div class="brand">
    <div id="informations">
        <p>
            En 1920, passionné de sport et de chaussures, l’allemand Adolf Dassler, né le 3 novembre 1900 et fils d’un savetier bavarois, fabrique à la main, avec l’aide de deux cordonniers, ses premières chaussures de sport tout cuir. Dès le départ, il adopte 3 principes de base : performance sportive, protection contre les blessures, solidité.
            Au début de l’été 1924, il s’associe avec son frère Rudolf pour créer la société "Usine de chaussures Dassler frères, Herzogenaurach " . Rapidement, une douzaine de personnes rejoignent l’entreprise familiale, qui produit alors 50 paires de chaussures par jour.
        </p>
        <a href="{{ route('brands.show', ['slug' => $brand_nike->slug]) }}" class="call-to-action">Découvrir notre collection Adidas</a>
    </div>
    <a href="{{ route('brands.show', ['slug' => $brand_nike->slug]) }}"><img src="{{asset('storage/images/brands/banners/adidas-banner.jpg')}}" alt="adidas-banner"></a>
</div>
@endsection