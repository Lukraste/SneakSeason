@extends('main-layout')
@section('content')

<div class="block m-auto my-24 py-8 px-8 p-6 rounded-lg shadow-lg text-[#dbe1e3] bg-[#171730] max-w-md">

  <form  method="POST" action="{{ route('register') }}">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      <div class="grid grid-cols-2 gap-4">
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
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
            focus:text-gray-700 focus:bg-white  focus:outline-none" id="exampleInput123"
            aria-describedby="emailHelp123" placeholder="Prénom" name="firstname" value="{{old('firstname')}}">
        </div>
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
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
            focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput124"
            aria-describedby="emailHelp124" placeholder="Nom" name="lastname" value="{{old('lastname')}}">
        </div>
      </div>

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
          placeholder="Adresse e-mail" name="email" value="{{old('email')}}">
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
          focus:text-[#171730] focus:bg-white focus:outline-none" id="exampleInput126"
          placeholder="Mot de passe" name="password">
      </div>

      <div class="form-group mb-6">
        <input type="password" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-[#dbe1e3] bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:outline-none" id="exampleInput126"
          placeholder="Confirmation du mot de passe" name="password_confirmation">
      </div>

      <div class="form-group form-check text-left ml-8 mb-6">
        <input type="checkbox" name="rgpd" value="1"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-[#dbe1e3] checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="exampleCheck25"/>
      <label class="form-check-label inline-block" for="exampleCheck25">J'accepte la politique de confidentialité</label>
      </div>
      <button type="submit" class="call-to-action">Créer un compte</button>
    </form>
  </div>
  
@endsection