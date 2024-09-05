<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function show($id)
    {
        $data['produk'] = product::find($id);
        // dd($data['produk']);
        return view('checkout',$data);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'payment_type' => 'required|string',
            'total_amount' => 'required|numeric',
        ]);

        Order::created($validated);

        return redirect('checkout/confirmation');
    }
    public function confirmation()
    {
        return view('checkout-confirm');
    }

}
