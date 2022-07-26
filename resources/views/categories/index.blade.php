@extends('layouts.layout')

@section('content')
<div class=" container-{breakpoint} ms-3">
  <div class="row mb-3 mt-3 ">
      <div class=" col-md-3 col-sm-10 col-10 justify-content-evenly">
        <div class="list-group mx-2">
          <h4>
            <a class="text-decoration-none list-group-item" href="{{route('categories.index')}}">Todos</a>
            @foreach($catlist as $cat)
              <a class="text-decoration-none list-group-item" href="{{route('categories.index', ['id_category'=>$cat->id])}}">{{$cat->name}}</a>
            @endforeach
          </h4>
        </div>
      </div>    
  
  
    <div class=" row col-10 col-sm-5 col-md-9 "> 
        @foreach($list as $prod) 
          <div class="card mx-3 col-md-3 col-sm-12 col-12 mb-3"  >
            <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="..." style="width: 100%; height: 100% ">
            <div class="card-body opacity-75">
              <h5 class="card-title">{{$prod->name}}</h5>
              <p class="card-text">R$ {{$prod->value}}</p>
              <div class="text-center d-grid gap-2 d-md-block">
              <form action="{{route('cart.store')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary">Comprar </button>
                  @auth
                    <input type="hidden" name="id_user"  value="{{Auth::user()->id}}">
                  @endauth
                  <input type="hidden" name="product_id" value="{{$prod->id}}">
                  <input type="hidden" name="name" value="{{$prod->name}}">
                  <input type="hidden" name="photo" value="{{$prod->photo}}">
                  <input type="hidden" name="value" value="{{$prod->value}}">
                  <input type="hidden" name="description" value="{{$prod->description}}">
                </form>
                  <a href="{{route('products.show',['product'=>$prod->id])}}"> <button type="button" class="btn btn-outline-primary">Detalhes </button></a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </div>
</div>
  


@endsection