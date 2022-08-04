<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    
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
        }}
