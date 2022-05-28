@extends('main-layout')
@section('content')

@include('components.breadcrumb')
@include('components.admin-navbar')

<div class="flex flex-col m-auto mt-8 mb-40 container">
      <h1>Liste des commandes</h1>
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
                    Nom utilisateur
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Email utilisateur
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
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Date
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Code de référence
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Status
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Prix total
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $order->id }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $order->user->lastname }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $order->user->email }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $order->product->name }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $order->size->value}}
                   </td>
                   <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $order->quantity }}
                   </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $order->date }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $order->reference_code }}
                   </td>
                   <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $order->status }}
                   </td>
                   <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     {{ $order->total_price_vat }}€
                   </td>

                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                     <form action="{{ route('order.destroy', ['reference_code' => $order->reference_code])}}" method="post">
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