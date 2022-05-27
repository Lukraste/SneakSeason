@extends('main-layout')
@section('content')

@include('components.breadcrumb')

  <div class="container-product">
    <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <ul class="image-list">

            @foreach ($product->images as $image)
              <li class="image-item"><img src="{{asset('storage/images/products/'.$image->path)}}"></li>
            @endforeach
          </ul>

          @foreach ($product->images->take(1) as $image)
            <div class="product-image">
              <img class="active" src="{{asset('storage/images/products/'.$image->path)}}">
            </div>
          @endforeach
        </div>
      </div>

    <div class="details-product">
      <div class="titles">
        <h1>{{ $product->name }}</h1>
        <h2>{{ $product->brand->name }}</h2>
        <h3>{{ $product->gender}}</h3>
      </div>

      <div class="form-product">
      <form action="/order/create" method="post">
        @csrf

            <div>
              <label for="size_id">Taille(s)</label>
              <select class="select" name="size_id" id="sizes">
                @foreach ($product->sizes as $size)
                  <option value="{{ $size->id }}">{{ $size->value }}</option>
                @endforeach
              </select>
            </div>           
            <br>

            <div>
            <label for="quantity">Quantité</label>
              <select class="select quantity" name="size_id" id="sizes">
                @for ($i=0 ; $i<=10 ; $i++)
                  <option value="{{$i}}">{{ $i }}</option>
                @endfor
            </select>
            </div>
            <br>
            <p>{{$product->price_vat}}€ <span>({{ $product->be_vat }}% Tva comprise)</span></p>
            <div class="buttons">
              <button class="call-to-action">
                <input type="submit" value="Réserver">
              </button>
            </input>
            <section class="ac-footer">
              <div class="ac-footer-container ac-footer-brand">
                <span class="ac-icon ac-icon-love-dark"></span> 
              </div> 
            </section>  
            </div>
        </form>
      </div>

      <div class="description">
        <h3>Description du produit</h3>
        <p>
          {{ $product->description }}
        </p>
      </div>
    </div>
  </div>

  <div class="similar-products">
    <h2>Produits similaires</h2>
    <div class="products">
      <div class="products-list">
        @foreach($product->modele->products->take(5) as $product)
          <div class="product-one">
            @foreach ($product->images->take(1) as $image)
              <a class="relative overflow-hidden bg-no-repeat bg-cover" id="image" href="{{ route('sneakers.show', ['slug' => $product->slug, 'id']) }}">
                <img class="max-w-xs hover:scale-125 transition duration-500 ease-in-out" src="{{asset('storage/images/products/'.$image->path) }}" alt="{{ $product->slug }}">
              </a>
            @endforeach
            <div class="infos">
              <div>
                <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}"><p id="name">{{ $product->name }}</p></a>
                <a href="{{ route('brands.show', ['slug' => $product->brand->slug]) }}"><p id="brand">{{ $product->brand->name }}</p></a> 
              </div>
                <p id="price">{{ $product->price_vat}} €</p>
            </div>
              <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}" class="call-to-action">Réserver</a>
          </div>
      @endforeach
   </div>
  </div>
</div>
@endsection
