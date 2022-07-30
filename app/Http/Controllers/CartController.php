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

    public function store($cart=0, Request $request){
        if($cart !=0){
            $data = $request->all();
        Itens_Request::create($data);
        }
        dd($request);
        /*$produc_id = new User();
        $user->name = $request->name;
        $user->save();*/
        
    }

    public function update(){


    }

    public function delete(){


    }
}
