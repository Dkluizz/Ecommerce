<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    //INICIO PRODUTO

    public function create()
    {
        $data=[];        
        $listCat = Category::all();
        $data['list']=$listCat;
        
        return view('products.create',$data);
    }

    public function store(Request $request)
    {
        $product = $request->all();
        Products::create($product);  

        return redirect()->route('users.index');

    }

    public function show($product) 
    {
        $data=[];
        $show = Products::where('product', 'id');

        $data['show']=$show;
        return view('products.show', $data); 
    }


    //FIM PRODUTO
}
