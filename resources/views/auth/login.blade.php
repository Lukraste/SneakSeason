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

  <form method="POST" action="{{ route('login') }}">
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

      <div class="form-group mb-6">
        <input type="password" class="form-control block
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
          focus:text-[#171730] focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
          placeholder="Mot de passe" name="password">
      </div>

      <div class="flex justify-between items-center mb-6">
        <div class="form-group form-check">
          <input name="remember" type="checkbox"
            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
            id="exampleCheck2">
          <label class="form-check-label inline-block text-[#dbe1e3]" for="exampleCheck2">Se souvenir de moi</label>
        </div>
        <a href="{{ route('password.request') }}"
          class="text-[#dbe1e3] hover:underline  transition duration-200 ease-in-out">
          Mot de passe oublié ?</a>
      </div>

      <p class="text-[#dbe1e3] mt-6 text-center">Pas de compte ?<a href="{{ route('register') }}"
          class="text-[#dbe1e3] hover:underline transition duration-200 ease-in-out"> S'inscrire</a>
      </p>
      <button type="submit" class="call-to-action mt-4">Se connecter</button>
    </form>
  </div>

@endsection
