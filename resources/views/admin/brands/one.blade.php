@extends('admin.layout')

@section('admin-data')
<li>
    <a href="/admin/brands/{{$brand->id}}">{{$brand->name}}</a>
    <br>
    <button><a href="/admin/brands/{{$brand->id}}/edit">Modifier</a></button>
    <form action="/admin/brands/{{$brand->id}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="Delete">
    </form>
    <p>Sneakers : </p>
    <ul>
        @foreach($brand->sneakers as $brandSneaker)
            <li><a href="/admin/sneakers/{{$brandSneaker->id}}">{{$brandSneaker->id}} - {{$brandSneaker->name}}</a></li>
            <button><a href="/admin/sneakers/{{$brandSneaker->id}}/edit">Modifier</a></button>
            <form action="/admin/sneakers/{{ $brandSneaker->id }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer" name="Delete">
            </form>
        @endforeach
    </ul>
</li>
@endsection



