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
        $this->authorize('is_admin');

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
        $this->authorize('is_admin');
        
        $catList = [];
        $cat = Category::all();
        $catList['cat'] = $cat;

        $edit = Products::find($product);
        
        $data = $request->only('name','value','photo','description','id_category');
        if($request->has('photo') && $request->photo->isValid()){
            
            $nameImage = $request->file('photo')->getClientOriginalName();

            Storage::put("/public/images/produtos/{$nameImage}", file_get_contents($request->photo));  

            $data['photo']="/storage/images/produtos/{$nameImage}";
        }
        
        Products::find($product)->update($request ->all());

        return view('products.edit', compact('edit'),$catList);


    }

    public function destroy($product)
    {
        
        Products::findOrFail($product)->delete();

        return redirect()->route('users.index');
    }

    //FIM PRODUTO
}
