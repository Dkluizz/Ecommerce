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

        $data=[];        
        $listCat = Category::all();
        $listProduct = Products::filterByCategory($request->id_category??null)->get();

        $data['catlist']=$listCat;
        $data['list']= $listProduct;
        
        //whereHas('category', fn($query)=>$query->where ('id',$id_category??null))->get();

        return view('categories.index', $data);
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

    public function idCat(){
        //
    }

    //FIM CATEGORIA
}
