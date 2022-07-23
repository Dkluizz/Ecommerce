<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    //INICIO PRODUTO

    public function create()
    {
        
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Products::create($data);

        return redirect()->route('users.index');

    }

    public function show(Products $product) 
    {
        if(!$show = Products::table('id'))
            return redirect()->route('home');

        return view('products.show', compact('product')); 
    }


    //FIM PRODUTO
}
