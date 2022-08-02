@extends('layouts.layout')


@section('content')

<div class=" mt-0.8">
        <label for="inputAddress" class="form-label">Endereço:</label>
        <input type="text" class="form-control" id="adress" placeholder="Rua:/Av: nº, Bairro:">
      </div>
    </div>
      <div class="col-md text-white">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="city">
      </div>
      <div class="col-4 text-white">
        <label for="inputState" class="form-label">Estado</label>
        <input type="text" class="form-control" id="state">
          </option>
        </select>
      </div>
      <div class="col-4 text-white">
        <label for="inputZip" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep">
      </div>


@endsection