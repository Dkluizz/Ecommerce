<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $cartProd = Cart::all();
        $data['cart'] = $cartProd;

    
        return view('cart.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Cart::create($data);

       
    }

    public function update(){


    }

    public function delete(){


    }
}
