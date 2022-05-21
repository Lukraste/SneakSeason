@extends('layouts.main-2')
@section('content')

<div id="admin">


<div id="admin-menu">
    <ul>
        <li><a href="/admin">Accueil</a></li>
        <li><a href="/admin/users">Liste des utilisateurs</a></li>
        <li><a href="/admin/sneakers">Liste des sneakers</a></li>
        <li><a href="/admin/brands">Liste des marques</a></li>
        <li><a href="/admin/sizes">Liste des tailles</a></li>
        <li><a href="/admin/sneakers/create">Ajouter une sneaker</a></a></li>
        <li><a href="/admin/brands/create">Ajouter une marque</a></li>
        <li><a href="/admin/sizes/create">Ajouter une taille</a></li>
        <li>
        <form method="POST" action="{{ route('logout') }}"">
            @csrf
            <input type="submit" name="logout" value="Se déconnecter">
        </form>
        </li>
    </ul>
</div>

<div id="admin-data">
    @yield('admin-data')
</div>
</div>

@endsection