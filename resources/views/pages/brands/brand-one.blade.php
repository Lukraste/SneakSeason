@extends('main-layout')
@section('content')

@include('components.breadcrumb')

<div class="products">
   <a href="{{ route('brands.show', ['slug' => $brand->slug]) }}">
      <img class="brand-image" src="{{ url('storage/images/brands/logos'.$brand->image)}}" alt="logo-{{ $brand->slug}}">
   </a>
   <p>{{ $brand->products->count() }} produits</p>
      <div class="products-list">
         @foreach ($brand->products as $product)
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
   </div>
@endsection




