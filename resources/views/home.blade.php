@extends('layouts.layout')

@section('content')


  <div class="container-fluid  ">
    <h3 class="text-center mt-2">So na LuckyShopp, você encontra tudo para qualquer Setup ou Desafio.</h3>
    <div class="row ">
  <img src="{{url('/storage/images/banner1.jpg')}}" class="img-fluid col-6 shadow-lg p-2 bg-light rounded">
  <img src="{{url('/storage/images/banner2.jpg')}}" class="img-fluid col-6 shadow-lg p-2 bg-light rounded ">
  </div>
  <br>

    <div class=" row justify-content-evenly "> 
      @foreach($list as $product) 
        <div class="card mx-2 col-2 mb-3"  >
          <img src="{{url($product->photo)}}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->value}}</p>
            
              <a href="#"> <button type="button" class="btn btn-outline-primary">Comprar </button></a>
              <a href="{{route('products.show',['product'])}}"> <button type="button" class="btn btn-outline-primary">Detalhes </button></a>
            
          </div>
        </div>
      @endforeach
    
    </div>
</div>

  





@endsection