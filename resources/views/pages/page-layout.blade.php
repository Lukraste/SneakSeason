@extends('main-layout')
@section('content')

@include('components.breadcrumb')

<div class="products">
    <a href="{{ $url }}">
        <h1>{{ $title }}</h1>
    </a>
    <h2 id="count">{{ $products->count() }} produits</h2>
    <p>Filtres</p>

    @include('pages.products.products-all')
</div>
@endsection