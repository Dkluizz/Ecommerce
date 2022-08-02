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

    public function show($product) 
    {
        $show = Products::find($product);

       // dd($show);
        return view('products.show', compact('show')); 
    }

    public function edit($product, Request $request )
    {
        $data = [];
        $edit = Products::find($product);
        //Products::find($product)->update($request ->all());

        $data['edit'] = $edit;
        return view('products.edit', $data);

    }

    public function destroy($product)
    {
        
        Products::findOrFail($product)->delete();

        return redirect()->route('users.index');
    }

    //FIM PRODUTO
}
