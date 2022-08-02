<?php

namespace App\Http\Controllers;

use App\Models\Itens_Request;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
    
        return view('cart.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        Itens_Request::create($data);
        
    }

    public function update(){


    }

    public function delete(){


    }
}
