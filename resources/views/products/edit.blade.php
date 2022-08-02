@extends('layouts.admlay')

@section('content')
<div class="container mx-5 mt-4 text-white">
<div class="row ">
  @foreach('$edit as $prod')
  <form class=" col-md  " action="{{route('products.edit',['product'])}}" method="POST">
    @csrf
    @method('put')
  <div class="mt-1 ">
      <label for="name" class="form-label">Nome do Produto:</label>
      <input type="text" class="form-control" name="name" value="{{$prod->name}}">
 
    <div class=" mt-0.8">
      <label for="descriplg" class="form-label">Descrição:</label>
      <input type="text" class="form-control" name="description" value="">
    </div>
    </div>

    <div class="col-4 ">
      <label for="value" class="form-label">Valor:</label>
      <input type="text" class="value" name="">
    </div>
   @endforeach
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