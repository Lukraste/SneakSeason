@extends('pages.users.user-layout')
@section('user-data')

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