@extends('layouts.admlay')

@section('content')
<div class="container mx-5 mt-4 text-white">
<div class="row ">
  
  <form class=" col-md " action="{{route('products.edit',['product'])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mt-1">
      <label for="name" class="form-label">Nome do Produto:</label>
      <input type="text" class="form-control" name="name" value="{{$edit->name}}">
      
      <div class="mt-2">
      <label for="image" >Imagem do Produto</label>
      <input type="file" class="form-control-file"  name="photo" value="{{$edit->photo}}" >
      </div>

      <img class="rounded" src="{{$edit->photo}}" alt="{{$edit->name}}" style="width: 15rem; height: 15rem">

      <div class=" mt-2">
      <label for="id_category" class="form-label">Escolha uma categoria</label>
      <select class="form-select" name="id_category" aria-label="Default select example" >
        <option selected>Categorias</option>
        @foreach($cat as $cats)
        <option value="{{$cats->id}}">{{$cats->id}}.{{$cats->name}}</option>
        @endforeach
      </select>
      </div>

    <div class=" mt-2">
      <label for="description" class="form-label">Descrição Básica</label>
      <input type="text" class="form-control" name="description" value="{{$edit->description}}">
    </div>
    </div>

    <div class="col-4 ">
      <label for="value" class="form-label">Valor:</label>
      <input type="text" class="value" name="value" value="{{$edit->value}}">
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