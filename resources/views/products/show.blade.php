@extends('layouts.layout')

@section('content')

<div>
  <div class="container mt-2 mb-3 ">
    <h3 class="text-center text-white">So na LuckyShopp, você encontra tudo para qualquer Setup.</h3>
    <div class="row justify-content-evenly mt-4">
  
  <img src="{{($show->photo)}}" class="img col-5 shadow-lg p-2 bg-light rounded">
  <div class="form-group col-6">
    <h4 class="text-white" >
      <p>{{($show->name)}}</p>
      <p>{{($show->value)}}</p>
      <p>{{($show->description)}}</p>
    </h4>
    
    <form action="{{route('cart.store')}}" method="POST">
        @csrf
       <button type="submit" class="btn btn-primary">Comprar </button>
        <input type="hidden" name="product_id" value="{{$show->id}}">
        <input type="hidden" name="name" value="{{$show->name}}">
        <input type="hidden" name="photo" value="{{$show->photo}}">
        <input type="hidden" name="value" value="{{$show->value}}">
        <input type="hidden" name="description" value="{{$show->description}}">
    </form>
    
  </div>
  </div>
  </div>

@endsection
