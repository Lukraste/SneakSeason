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
      <form action="/orders" method="post">
        @csrf
        <input name="id" value="{{ $product->id }}" hidden/>
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
              <select class="select quantity" name="quantity" id="quantity">
                @for ($i=1 ; $i<=10 ; $i++)
                  <option value="{{$i}}">{{ $i }}</option>
                @endfor
            </select>
            </div>
            <br>
            <p>{{$product->price_vat}}€ <span>({{ $product->be_vat }}% Tva comprise)</span></p>

            <div class="buttons">
              <div class="call-to-action">   
                <button>
                  <input type="submit" value="Réserver">
                </button>
              </div>
              </form>

            <form action="/user_products" method="post">
              @csrf
            <input name="product_id" value="{{ $product->id }}" hidden/>
            
              <button type="submit">

              <section class="ac-footer">
                <input type="submit" value="">
                <div class="ac-footer-container ac-footer-brand">
                  <span class="ac-icon ac-icon-love-dark"></span>
                </div> 
              </section> 
              </button>
            </form>
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
        @foreach($product->collection->products->take(5) as $similarProduct)
          <div class="product-one" @if($similarProduct->name == $product->name) hidden @endif>
            @foreach ($similarProduct->images->take(1) as $image)
              <a class="relative overflow-hidden bg-no-repeat bg-cover" id="image" href="{{ route('sneakers.show', ['slug' => $similarProduct->slug, 'id']) }}">
                <img class="max-w-xs hover:scale-125 transition duration-500 ease-in-out" src="{{asset('storage/images/products/'.$image->path) }}" alt="{{ $similarProduct->slug }}">
              </a>
            @endforeach
            <div class="infos">
              <div>
                <a href="{{ route('sneakers.show', ['slug' => $similarProduct->slug]) }}"><p id="name">{{ $similarProduct->name }}</p></a>
                <a href="{{ route('brands.show', ['slug' => $similarProduct->brand->slug]) }}"><p id="brand">{{ $similarProduct->brand->name }}</p></a> 
              </div>
                <p id="price">{{ $similarProduct->price_vat}} €</p>
            </div>
              <a href="{{ route('sneakers.show', ['slug' => $similarProduct->slug]) }}" class="call-to-action">Réserver</a>
          </div>
      @endforeach
   </div>
  </div>
</div>
@endsection
