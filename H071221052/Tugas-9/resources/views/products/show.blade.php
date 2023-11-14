@extends('layouts.app')

@section('content')
    <style>
        img {
            height: 400px;
            object-fit: contain;
        }

        .back-button {
            text-align: center;
            margin-bottom: 20px;
        }

    
       
    </style>

    <div class="container my-5">
        
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top bg-secondary mt-3 rounded" alt="{{ $product->name }}" style="width: 400px;">
            </div>
            <div class="col-md-7">
                <h5 class="card-title my-3 fw-bold fs-4">{{ $product->name }}</h5>
                <p class="card-text fs-2 fw-bold">Rp.{{ number_format($product->price, 2, ',', '.') }}</p>
                <hr>
                <p class="card-text fs-5 text-secondary"><span class="fw-semibold text-dark">Category :</span> {{ $product->category }}</p>
                <hr>
                <p class="card-text fs-6"><span class="fw-semibold">Description :</span> {!! nl2br(e($product->description)) !!}</p>
            </div>
        </div>
    </div>
    <div class="back-button">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection


