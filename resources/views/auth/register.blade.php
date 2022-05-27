@extends('main-layout')
@section('content')

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
    <form>
      <div class="grid grid-cols-2 gap-4">
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
            aria-describedby="emailHelp123" placeholder="Prénom" name="firstname">
        </div>
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
            aria-describedby="emailHelp124" placeholder="Nom" name="lasttname">
        </div>
      </div>
      <div class="form-group mb-6">
        <input type="email" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
          placeholder="Adresse e-mail" name="email">
      </div>
      <div class="form-group mb-6">
        <input type="password" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
          placeholder="Mot de passe" name="password">
      </div>
      <div class="form-group form-check text-left mb-6">
        <input type="checkbox"
          class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
          id="exampleCheck25">
        <label class="form-check-label inline-block text-gray-800" for="exampleCheck25" name="newsletters">Je m'abonne à la newsletters</label>
        <br>
        <input type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="exampleCheck25">
      <label class="form-check-label inline-block text-gray-800" for="exampleCheck25" name="cgu">J'accepte les conditions générales d'utilisation</label>
      </div>
      <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-black
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-black-700 hover:shadow-lg
        focus:bg-black-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-black-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Sign up</button>
    </form>
  </div>
  
@endsection