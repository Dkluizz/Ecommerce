<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        
        return view('cart.index');
    }

    public function create(){


    }


    public function store(Request $request){
        $data=[];
        $itens_request=Products::all();
        
        $data['itens']->$itens_request;

    }

    public function update(){


    }

    public function delete(){


    }
}
