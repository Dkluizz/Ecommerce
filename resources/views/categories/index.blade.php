@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row justify-content-evenly mt-3 mb-2">
  @foreach($catlist as $cat)
  <div class=" col-2">
      <h4><a class="text-decoration-none" href="{{route('categories.index', ['id_category'=>$cat->id])}}">{{$cat->name}}</a></h4>
    </div>
    @endforeach
  </div>
  </div>

  <div class="container">
  <div class=" row justify-content-evenly "> 
      @foreach($list as $prod) 
        <div class="card mx-2 col-2 mb-3"  >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">{{$prod->value}}</p>
            
              <a href="#"> <button type="button" class="btn btn-outline-primary">Comprar </button></a>
              <a href="{{route('products.show',['product'])}}"> <button type="button" class="btn btn-outline-primary">Detalhes </button></a>
            
          </div>
        </div>
      @endforeach

    </div>
  </div>

  


@endsection