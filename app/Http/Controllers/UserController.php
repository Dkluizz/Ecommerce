<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $data=[];
        $listaProduto = Products::all();
        $data['list']= $listaProduto;
        
        return view('users.index', $data);
        
    }


    public function create()
    {
        return view('login.create');
    }

     
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

       Users::create($data);

        return redirect()->route('home');
    }    


     public function login()
    {
        return view('login.userlogin');
    }
}
