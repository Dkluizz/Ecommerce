@extends('layouts.admlay')

@section('content')
<div class="container">
 <div class="row mt-4 justify-content-evenly">
@foreach($list as $prod) 
        <div class="card mx-2 col-2 mb-3" >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">{{$prod->value}}</p>
            
              <a href="#"> <button type="button" class="btn btn-outline-primary">Atualizar </button></a>
              <a href="#"> <button type="button" class="btn btn-outline-primary">Excluir </button></a>
            
          </div>
        </div>
      @endforeach
  </div>
</div>

@endsection