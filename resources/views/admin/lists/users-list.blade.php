@extends('main-layout')
@section('content')

@include('components.breadcrumb')
@include('components.admin-navbar')

<div class="flex flex-col m-auto mt-8 mb-40 container">
      <h1>Liste des utilisateurs</h1>
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
                    Prénom
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Email
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    Role
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                    rgpd
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                     Date d'inscription
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->id }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->lastname }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->firstname }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->email }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->role }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->rgpd }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                    {{ $user->created_at }}
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