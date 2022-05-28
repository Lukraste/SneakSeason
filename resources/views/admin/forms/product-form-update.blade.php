@extends('main-layout')
@section('content')

<div class="block m-auto my-24 py-8 px-8 p-6 rounded-lg shadow-lg text-[#dbe1e3] bg-[#171730] max-w-md">

  <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
    @csrf
    @method('put')
      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-[#171730]
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125" value="{{$product->name}}" name="name">
      </div>

      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-[#171730]
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125" value="{{$product->slug}}" name="slug">
      </div>

      <div class="form-group mb-6">
        <input type="number" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-[#171730]
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125" value="{{$product->price_vat}}" name="price_vat">
      </div>

      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-[#171730]
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125" value="{{$product->product_code}}" name="product_code">
      </div>

      <label for="gender">Genre</label>
      <br>
      <div class="form-group mb-6">
        <select name="gender">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
      </div>

      <label for="sizes">Tailles disponibles</label>
      <br>
      <select name="sizes[]" multiple>
        @foreach($sizes as $size)
            <option value="{{$size->id}}"
                @if(isset($product))
                    @foreach($product->sizes as $productSize)
                        {{$productSize->id === $size->id ? 'selected' : '' }} 
                    @endforeach
                @endif
                >{{$size->value}}</option>
        @endforeach
    </select>
    <br>

    <label for="stock">Stock</label>
    <br>
      <div class="form-group mb-6">
        <select name="stock">
            <option value="Disponible">Disponible</option>
            <option value="Rupture">Rupture</option>
        </select>
      </div>

      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-[#171730]
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125" value="{{$product->description}}" name="description">
      </div>

      <label for="brand_id">Marque</label>
      <br>
      <div class="form-group mb-6">
        <select name="brand_id">
            @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
      </div>

      <label for="color_id">Couleur</label>
      <br>
      <div class="form-group mb-6">
        <select name="color_id">
            @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>
            @endforeach
        </select>
      </div>

      <label for="collection_id">Collection</label>
      <br>
      <div class="form-group mb-6">
        <select name="collection_id">
            @foreach ($collections as $collection)
                <option value="{{$collection->id}}">{{$collection->name}}</option>
            @endforeach
        </select>
      </div>
      <button type="submit" class="call-to-action mt-4">Mettre à jour </button>
    </form>
  </div>
@endsection
