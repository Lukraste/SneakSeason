@extends('admin.layout')
@section('admin-data')

<h1>Tableau de bord</h1>

<h2>Données générales</h2>
<h3>Utilisateurs : <strong>{{$users}}</strong></h3>
<h3>Sneakers : <strong>{{$sneakers}}</strong></h3>
<h3>Marques : <strong>{{$brands}}</strong></h3>
<h3>Tailles : <strong>{{$sizes}}</strong></h3>
<h3>Commandes : <strong>{{$sizes}}</strong></h3>
<br>
<h3>Derniers utilisateurs enregistrés : </h3>
<ul>
    @foreach($last_users as $user)
       <li>{{$user->id}} {{$user->name}} - {{$user->firstname}}</li> 
    @endforeach
</ul>
<h3>Dernières sneakers enregistrées : </h3>
<ul>
    @foreach($last_sneakers as $sneaker)
       <li>{{$sneaker->id}} - {{$sneaker->name}}</li> 
    @endforeach
</ul>
<h3>Sneakers de marque Nike : {{$sneakers_nike}} </h3>
<h3>Sneakers de marque Adidas : {{$sneakers_adidas}} </h3>
<h3>Sneakers de marque Asics : {{$sneakers_asics}} </h3>
<h3>Sneakers de marque Jordan : {{$sneakers_jordan}} </h3>
<h3>Sneakers de marque Puma : {{$sneakers_puma}} </h3>

@endsection
