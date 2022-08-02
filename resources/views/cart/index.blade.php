@extends('layouts.layout')

@section('content')

<div class="container mx-0 ">
 <div class="row col justify-content-evenly">
   <div class="mb-3 mt-4 " style="max-width: 45rem;">
    
   @foreach($cart as $cartP)
   <div class="card mb-2">
   <div class="row">   
      <div class="col-md-3 col-sm-6 ">
        <img src="{{$cartP->photo}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">{{$cartP->name}}</h5>
          <h5 class="card-text">{{$cartP->value}}</h5>
          <p class="card-text">{{$cartP->description}}</p>
          <select class="form-select form-select-sm " style="width: 6rem;" aria-label=".form-select-sm ">
            <option selected>Qtd: 1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <a href="{{route('home')}}" type="button" class="btn btn-outline-primary"> Excluir </button></a>
        </div>
      </div>
    </div>
    </div>
    @endforeach
   </div>
  
   
      <div class="card  mt-4" style="width: 20rem; height: 15rem;">
        <div class="card-body">
          <h5 class="card-title">R$XXXXX,XX</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href=""> <button type="button" class="btn btn-outline-primary"> Comprar </button></a>
          <a href="{{route('home')}}" type="button" class="btn btn-outline-primary"> Voltar </button></a>
        </div>
      </div>
   

 </div>
</div>

@endsection