<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->only('name','value','photo','description','id_category');
        if($request->has('photo') && $request->photo->isValid()){
            
            $nameImage = $request->file('photo')->getClientOriginalName();

            Storage::put("/public/images/produtos/{$nameImage}", file_get_contents($request->photo));  

            $data['photo']="/storage/images/produtos/{$nameImage}";
        }
        
        Products::create($data);

        return redirect()->route('users.index');

    }

    public function show($cart) 
    {
        $show = Products::find($cart);

       // dd($show);
        return view('products.show', compact('show')); 
    }


    //FIM PRODUTO
}
