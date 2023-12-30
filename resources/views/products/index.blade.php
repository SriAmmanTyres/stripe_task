@extends('layouts.app') 

@section('content')
    <h1>Products</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Orginal price: ${{ $product->price }}</p>
                        <p class="card-text">Offer: ${{ $product->offer_price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
