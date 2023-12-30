<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $page_title = 'Products';
        return view('products.index', compact('products', 'page_title'));
    }

    public function show(Product $product)
    {
        $page_title = 'View Product';
        return view('products.show', compact('product', 'page_title'));
    }
    public function checkout(Product $product, Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        
        $paymentIntent = PaymentIntent::create([
            'amount' => $product->price * 100, // Amount in cents
            'currency' => 'usd',
        ]);

        return view('products.payment_success', [
            'clientSecret' => $paymentIntent->client_secret,
        ]);
    }

}
