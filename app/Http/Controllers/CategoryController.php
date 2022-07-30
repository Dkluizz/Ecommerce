<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Products;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //INICIO CATEGORIA

    public function index( Request $request)
    {
        $search = request('search');
        if($search){
            $listProduct = Products::where([
                ['name', 'like', '%'.$search.'%']])->get();

        }else{
            $listProduct = Products::all();
        }

        $data=[];        
        $listCat = Category::all();
        $listProduct = Products::filterByCategory($request->id_category??null)->get();

        $data['catlist']=$listCat;
        $data['list']= $listProduct;
        
        

        return view('categories.index', $data,['list'=> $listProduct]);
    }

    public function create()
    {
        $data=[];
        $listCat = Category::all();
        $data['catlist']=$listCat;
        
        return view('categories.create', $data);
    }

    public function store(Request $request)
    {
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        
        return redirect()->route('categories.create');
    }

    
    //FIM CATEGORIA
}
