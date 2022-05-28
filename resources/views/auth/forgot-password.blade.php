@extends('main-layout')
@section('content')
<div class="block m-auto my-24 py-8 px-8 p-6 rounded-lg shadow-lg text-[#dbe1e3] bg-[#171730] max-w-md">

   @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
   @endif
   <h1 class="mb-4">Réinitialiser le mot de passe</h1>
   <form method="POST" action="{{ route('password.email') }}">
     @csrf
       <div class="form-group mb-6">
         <input type="email" class="form-control block
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
           focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput125"
           placeholder="Adresse e-mail" name="email">
       </div>
       
       <button type="submit" class="call-to-action mt-4">Envoyer</button>
     </form>
   </div>
@endsection