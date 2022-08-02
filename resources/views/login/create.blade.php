@extends('layouts.layout')

@section('content')
<div class="container mx-5">
 <div class="row ">
  <form class=" col-md  ">
    @csrf
  <div class="mt-0.8 text-white">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" placeholder="Nome e Sobrenome">
      <div class=" mt-0.8">
        <label for="inputEmail4" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="email">
      </div>
      <div class=" mt-0.8 ">
        <label for="inputPassword4" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="password" placeholder="Senha">
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