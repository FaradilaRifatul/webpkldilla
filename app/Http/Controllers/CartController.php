<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // app/Http/Controllers/CartController.php
public function add($id)
{
    $product = product::find($id);

    // Cek jika produk sudah ada di keranjang
    $cart = cart::where('product_id', $id)->first();

    if ($cart) {
        $cart->quantity += 1;
        $cart->save();
    } else {
        Cart::create([
            'product_id' => $id,
            'quantity' => 1,
        ]);
    }

    return redirect()->back();
}

public function index()
{
    $cartItems = Cart::with('product')->get();
    return view('cart.index', compact('cartItems'));
}

}