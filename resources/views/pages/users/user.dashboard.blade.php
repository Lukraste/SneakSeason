@extends('pages.users.user-layout')
@section('user-data')


<div id="user-edit">
<form id="user-edit-form" action="/user/{{$user->id}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nom :</label>
    <input type="text" name="name" value="{{$user->name}}">
    <br>

    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" value="{{$user->firstname}}">
    <br>

    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" value="{{$user->email}}" required>
    <br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" placeholder="Nouveau mot de passe">
    <br>

    <div id="user-sex">
    <label for="sex">Sexe</label>
    <input type="radio" name="sex" value="f" checked>
    <label for="sex">Femme</label>
    <input type="radio" name="sex" value="m">
    <label for="sex">Homme</label>
    </div>
    <br>

    <label for="birthdate">Votre date de naissance :</label>
    <input type="date" name="birthdater">
    <br>

    <label for="phone_number">Numéro de téléphone :</label>
    <input type="text" name="phone_number">
    <br>

    <input type="checkbox" name="optin_rgpd" value="1" required {{ isset($user->optin_rgpd) ? 'checked' : ''}}>
    <label for="optin_rgpd">J'ai lu et approuve la politique de confidentialité</label>
    <br>

    <input type="submit" name="submit" value="Mettre à jour mes données">
</form>
</div>

<h1>Liste des commandes</h1>

       @foreach($user->orders as $order)
               <li>{{$order->id}}</li>
               <li>{{$order->reference}}</li>
               <li>{{$order->delivery_date}}</li>
               <li>{{$order->status}}</li>
               <li>{{$order->gift}}</li>
               <li>{{$order->gift_text}}</li>
       @endforeach
    
@endsection