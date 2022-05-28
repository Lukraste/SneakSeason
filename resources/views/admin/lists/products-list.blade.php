@extends('main-layout')
@section('content')

@include('components.breadcrumb')
@include('components.admin-navbar')

<div class="flex flex-col m-auto mt-8 mb-40 container">
      <h1>Liste des produits</h1>
      <div class="overflow-x-auto sm:-mx-2 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-4 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    ID
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Nom
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Marque
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    TVA (%)
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Gender
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Stock
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Discount (%)
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Color
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Collection
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Prix (Tva comprise)
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->id }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                   <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}">{{ $product->name }}</a> 
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     <a href="{{ route('sneakers.show', ['slug' => $product->slug]) }}">{{$product->brand->name }}</a> 
                   </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->be_vat }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->gender }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->stock }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->discount }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $product->color->name}}
                   </td>
                   <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $product->collection->name }}
                   </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $product->price_vat }}€
                  </td>

                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    <form action="{{ route('products.edit', ['product' => $product->id]) }}" method="get">
                      @csrf
                      <input type="submit" value="Modifier" name="Update">
                  </form>
                  </td>

                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
                       @csrf
                       @method('delete')
                       <input type="submit" value="Supprimer" name="Delete">
                   </form>
                   </td>
                @endforeach
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>  
@endsection