@extends('layouts.main')
@section('container')
    <h1>Hasil Pencarian Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li><a href="{{ route('products.show', $product->productName) }}">{{ $product->productName }}</a></li>
        @endforeach
    </ul>
    <a href="/" class="btn btn-primary">Back to home</a>
@endsection
