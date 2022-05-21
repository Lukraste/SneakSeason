@extends('pages.layouts.header')

@section('content')
<li>
    <a href="/brands/{{$brand->id}}">{{$brand->name}}</a>
    <br>
    <p>Sneakers : </p>
    <ul>
        @foreach($brand->sneakers as $brandSneaker)
            <li><a href="/sneakers/{{$brandSneaker->id}}">{{$brandSneaker->id}} - {{$brandSneaker->name}}</li>
        @endforeach
    </ul>
</li>
@endsection




