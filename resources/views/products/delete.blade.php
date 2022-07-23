@extends('layouts.admlay')

@section('content')
<div class="container mx-5">
<div class="row ">
  <form class=" col-md  ">
    @csrf
  <div class="mt-1 ">
      <label for="name" class="form-label">Nome do Produto:</label>
      <input type="text" class="form-control" id="name" placeholder="Nome do Produto">
 
    <div class=" mt-1">
      <label for="description" class="form-label">Descrição Básica</label>
      <input type="text" class="form-control" id="description" placeholder="Descrição">
    </div>
    <div class=" mt-0.8">
      <label for="descriplg" class="form-label">Descrição Detalhada</label>
      <input type="text" class="form-control" id="descriplg" placeholder="Especificações">
    </div>
    </div>

    <div class="col-4 ">
      <label for="value" class="form-label">Valor:</label>
      <input type="text" class="value" id="R$">
    </div>
    
    <div class="mt-2 py-2">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </form>
 
  <div class="col-md position-relative mt-5 pt-5 mx-5 ">
   <img src="{{url('/storage/images/logo2.png')}}" class="mx-5" alt="LuckyShopp">
   </div>
  
</div>
</div>
@endsection