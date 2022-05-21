@extends('layouts.main-2')
@section('content')

<div id="logos-list">
    @foreach($brands as $brand) 
        <div id="logo-one">
            <a href="brands/{{$brand->id}}">
                <img src="{{asset("$brand->image")}}" alt="{{$brand->name}}-logo">
            </a>
        </div>
        
    @endforeach
</div>

@endsection



