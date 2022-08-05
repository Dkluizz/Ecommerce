@extends('layouts.admlay')

@section('content')
<div class="container">
 <div class="row mt-4 justify-content-evenly">
@foreach($list as $prod) 
        <div class="card mx-2 col-2 mb-3" >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="..." style="width: 100%; height: 100% ">
          <div class="card-body">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">R$ {{$prod->value}}</p>
            <div class="text-center d-grid gap-2 d-md-block">
                <form action="{{route('products.edit',['product'=> $prod->id])}}">
                  @csrf                
                  <button type="submit" class="btn btn-outline-primary">Atualizar </button>
                </form>

                <form action="{{route('products.destroy',['product' => $prod ])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-primary">Excluir</button>
                </form>

            </div>
          </div>
        </div>
      @endforeach
  </div>
</div>

@endsection