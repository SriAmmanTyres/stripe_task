
@extends('layouts.app')

@section('content')
    <div class="card">
        <!-- Product details -->
        <div class="card-body">
            <h2>{{ $product->name }}</h2>
            <p>Description: {{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
        </div>
    </div>

    <!-- Stripe payment form -->
    <form action="{{ route('products.checkout', $product->id) }}" method="POST">
        @csrf
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ config('services.stripe.key') }}"
                data-amount="{{ $product->offer_price * 100 }}"
                data-name="{{ $product->name }}"
                data-description="Purchase {{ $product->name }}"
                data-image="{{ asset('path_to_your_product_image') }}"
                data-locale="auto"
                data-currency="inr">
        </script>
    </form>
@endsection
