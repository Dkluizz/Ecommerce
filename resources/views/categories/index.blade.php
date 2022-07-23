@extends('layouts.layout')

@section('content')
<div class=" container-fluid ms-4">
  <div class="row mb-3 mt-3 ">
      <div class=" col-2 justify-content-evenly">
        <div class="list-group mx-2">
          <h4>
            <a class="text-decoration-none list-group-item" href="{{route('categories.index')}}">Todos</a>
            @foreach($catlist as $cat)
              <a class="text-decoration-none list-group-item" href="{{route('categories.index', ['id_category'=>$cat->id])}}">{{$cat->name}}</a>
            @endforeach
          </h4>
        </div>    
  </div>
  
  <div class=" row col-10  "> 
      @foreach($list as $prod) 
        <div class="card mx-2 col-2 mb-3"  >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">{{$prod->value}}</p>
            <div class="text-center d-grid gap-2 d-md-block">
                <a href="{{route('cart.create', ['cart'])}}"> <button type="button" class="btn btn-outline-primary">Comprar </button></a>
                <a href="{{route('products.show',['product'])}}"> <button type="button" class="btn btn-outline-primary">Detalhes </button></a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>

  


@endsection