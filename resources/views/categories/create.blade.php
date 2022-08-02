@extends('layouts.admlay')

@section('content')

<form action="{{route('categories.store')}}" method="post" class='col-md-6 offset-md-3 mt-5 shadow-lg p-3 mb-5 bg-white rounded'>
  <div class="form-group mb-3">
    @csrf
    <label class=" mb-2" for="text">Tipo de Categoria</label>
    <input type="text" class="form-control" name="name" placeholder="Categoria">
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>

<div class="container text-white">
  
  
  <div class="row justify-content-evenly">
  @foreach($catlist as $cat)
  <div class="col-3 mb-4">
      <h4>{{$cat->name}}</h4>
    </div>
    @endforeach
  </div>

  
</div>

@endsection