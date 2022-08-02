@extends('layouts.layout')

@section('content')


  <div class="container-fluid mx-2 ">
    <h3 class="text-center text-white mt-2">So na LuckyShopp, você encontra tudo para qualquer Setup ou Desafio.</h3>
    <div class="row justify-content-evenly ">
  <img src="{{url('/storage/images/banner1.jpg')}}" class="img-fluid col-5 shadow-lg p-2 bg-light rounded">
  <img src="{{url('/storage/images/banner2.jpg')}}" class="img-fluid col-5 shadow-lg p-2 bg-light rounded ">
  </div>
  <br>

    <div class=" row row-cols-3 row-cols-md-6  justify-content-evenly "> 
      @foreach($list as $prod) 
        <div class="card mx-2 col-md-2 col-sm-3 col-10 mb-3"  >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded " alt="...">
          <div class="card-body opacity-75">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">{{$prod->value}}</p>
              <div class="text-center d-grid gap-2 d-md-block">
                <form action="{{route('cart.store')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary">Comprar </button>
                  <input type="hidden" name="product_id" value="{{$prod->id}}">
                </form>
                  <a href="{{route('products.show',['product'=>$prod->id])}}"> <button type="submit" class="btn btn-outline-primary">Detalhes </button></a>
              </div>
          </div>
        </div>
      @endforeach
    
    </div>
</div>

  





@endsection