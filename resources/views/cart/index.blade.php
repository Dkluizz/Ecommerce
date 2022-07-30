@extends('layouts.layout')

@section('content')

<div class="container-fluid ms-4">
 <div class="row col">
   <div class="card mb-3 mt-4 " style="max-width: 55rem;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href=""> <button type="button" class="btn btn-outline-primary">  </button></a>
          <a href="{{route('home')}}" type="button" class="btn btn-outline-primary"> Excluir </button></a>
        </div>
      </div>
    </div>
   </div>
  
   <div class="row col-3 ms-5">
      <div class="card ms-3 mt-4" style="width: 20rem;">
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
</div>

@endsection