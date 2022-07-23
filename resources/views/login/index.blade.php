@extends('layouts.layout')

@section('content')

<form class='col-md-6 offset-md-3 mt-5 shadow-lg p-3 mb-5 bg-white rounded'>
  <div class="form-group mb-3">
    @csrf
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
</div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection