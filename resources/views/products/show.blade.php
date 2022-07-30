@extends('layouts.layout')

@section('content')

<div>
  <div class="container  mb-3 ">
    <h3 class="text-center">So na LuckyShopp, você encontra tudo para qualquer Setup.</h3>
    <div class="row">
      @foreach($show as $product)
  <img src="{{url($product->photo)}}" class="img-fluid col-6 shadow-lg p-2 bg-light rounded">
  <div class="form-group col-6">
    <h4 >
      {{url($product->name)}}
      {{url($product->value)}}
      {{url($product->description)}}
    </h4>
    @endforeach
    <input type="text" name="name" size="60" maxlength="45" /> 
    <button type="submit" class="btn btn-primary btn-lg mt-2">Comprar</button>
    
  </div>
  </div>
  </div>

@endsection
