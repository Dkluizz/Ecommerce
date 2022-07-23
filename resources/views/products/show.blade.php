@extends('layouts.layout')

@section('content')

<div>
  <div class="container  mb-3 ">
    <h3 class="text-center">So na LuckyShopp, você encontra tudo para qualquer Setup.</h3>
    <div class="row">
  <img src="{{url('/storage/images/banner1.jpg')}}" class="img-fluid col-6 shadow-lg p-2 bg-light rounded">
  <div class="form-group col-6">
    <h4 >Especificações</h4>
    <input type="text" name="name" size="60" maxlength="45" /> 
    <button type="submit" class="btn btn-primary btn-lg mt-2">Comprar</button>
    
  </div>
  </div>
  </div>

@endsection
