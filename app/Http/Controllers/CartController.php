<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = Cart::all();
        $total = Cart::all()->sum('value');
        
        return view('cart.index', compact('cart','total'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Cart::create($data);

        return redirect()->back();
       
    }

    
    public function destroy($cart)
    {
        Cart::findOrFail($cart)->delete();

        return redirect()->route('cart.index');


    }

    
}
