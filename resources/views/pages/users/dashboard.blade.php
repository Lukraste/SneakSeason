@extends('main-layout')
@section('content')

@include('components.breadcrumb')

<div class="tab-pane fade show active" id="pills-homeFill" role="tabpanel" aria-labelledby="pills-home-tabFill">
<div class="block mx-auto my-20 py-8 px-8 p-6 rounded-lg shadow-lg text-[#dbe1e3] bg-[#171730] max-w-md">
  <form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    @if ($errors->any())
    <div class="alert alert-danger">
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
          aria-describedby="emailHelp123" value="{{ auth()->user()->firstname }}" name="firstname">
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
          aria-describedby="emailHelp124" value="{{ auth()->user()->lastname }}" name="lastname">
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
        value="{{ auth()->user()->email }}" name="email">
    </div>

    <div class="form-group form-check text-left mb-6">
      <input type="checkbox" name="rgpd" value="1"
        @if(auth()->user()->rgpd) checked @endif
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-[#dbe1e3] checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="exampleCheck25"/>
        <label class="form-check-label inline-block" for="exampleCheck25">J'accepte les conditions générales d'utilisation</label>
    </div>
    <button type="submit" class="call-to-action">Mettre à jour</button>
</form>
</div>
@endsection