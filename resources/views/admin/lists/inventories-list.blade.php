@extends('main-layout')
@section('content')

@include('components.breadcrumb')
@include('components.admin-navbar')

<div class="flex flex-col m-auto mt-8 mb-40 container">
      <h1>Inventaire du stock</h1>
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
                    Produit
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Taille
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Quantité
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($inventories as $inventory)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $inventory->id }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $inventory->product->name }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $inventory->size->value }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $inventory->quantity }}
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