<?php

namespace App\Http\Controllers;

use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    
    {
        $search = request('search');

        if($search){
            $listProduct = Products::where([
                ['name', 'like', '%'.$search.'%']

        ])->get();

        }else{
            $listProduct = Products::all();
        }
        
        return view('home', ['list'=> $listProduct]);
    }

    
    
}
