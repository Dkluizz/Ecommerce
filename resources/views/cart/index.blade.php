@extends('layouts.layout')

@section('content')

<div class="container-lg  ">
 <div class="row col justify-content-evenly">
   <div class="mb-3 mt-4 " style="max-width: 45rem;">
    
   @foreach($cart as $cartP)
   <div class="card mb-2">
   <div class="row">   
      <div class="col-md-3 col-sm-6  ">
        <img src="{{$cartP->photo}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">{{$cartP->name}}</h5>
          <h5 class="card-text">{{$cartP->value}}</h5>
          <p class="card-text">{{$cartP->description}}</p>

          <form action="{{route('cart.destroy',['cart' => $cartP ])}}" method="POST">
             @csrf
             @method('DELETE')
              <button type="submit" class="btn btn-outline-primary">Excluir</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    @endforeach
   </div>
  
   
      <div class="card  mt-4" style="width: 20rem; height: 100%;">
        <div class="card-body">
          <h5 class="card-title">Total : R${{$total}}</h5>
          
          <form class="row g-3">
            
            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="col-md-8">
              <label for="inputCity" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputZip" class="form-label">Estado</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </form>
          <p class="card-text"></p>
          <a href=""><button type="button" class="btn btn-outline-primary"> Finalizar </button></a>
          <a href="{{route('home')}}" type="button" class="btn btn-outline-primary"> Voltar </button></a>
        </div>
      </div>
   

 </div>
</div>

@endsection