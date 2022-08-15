<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = Cart::where('id_user' , Auth::user()->id)->get();
        $total = Cart::where('id_user' , Auth::user()->id)->sum('value');
        
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


    public function clear()
    {
        
        Cart::where("id_user" , Auth::user()->id)->delete();        
        return redirect(route('cart.index'))->with('mensagem','Compra realizada com sucesso');       

    }
    

    
}
