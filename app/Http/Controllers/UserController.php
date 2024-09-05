<?php

namespace App\Http\Controllers;

// use APP\Models\User;

use App\Models\Cart;
use App\Models\Order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['Required','email'],
            'password' => ['Required']
        ]);
        if (Auth::attempt($validate)){
            return redirect('/user');
        }
        return redirect()->back()->with('pesanLogin', 'Maaf login anda gagal');
    }
    public function user(Request $request){
        $data['user']=User::all();
        $data['total_user']=$data['user']->count();
        $data['product']=product::all();
        // dd($data['product']);
        return view('user', $data);
    }
    public function product(Request $request){
        return view('product');
    }
    public function checkout(){
        return view('checkout');
    }
    public function keranjang(Request $request){
        return view('keranjang');
    }
    public function show($id){
        $user = auth()->user();
        $data['product'] = product::find($id);
        return view('checkout', compact('user'),$data);
    }

// Menampilkan riwayat pesanan
public function orders()
{
    $orders = Order::with('product')->get();
    return view('checkout.orders', compact('orders'));
}
public function berhasil(){
    return view('berhasil');
}
public function sukses(){
    return view('sukses');
}

}
    

