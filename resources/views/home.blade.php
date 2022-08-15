@extends('layouts.layout')

@section('content')


  <div class="container-{breakpoint} mx-2 ">
    <h3 class="text-center text-white mt-2">So na LuckyShopp, você encontra tudo para qualquer Setup ou Desafio.</h3>
    <div class="row justify-content-evenly ">
  <img src="{{url('/assets/images/banner1.jpg')}}" class="img-fluid col-5 shadow-lg p-2 bg-light rounded">
  <img src="{{url('/assets/images/banner2.jpg')}}" class="img-fluid col-5 shadow-lg p-2 bg-light rounded ">
  </div>
  <br>

    <div class=" row row-cols-3 row-cols-md-6  justify-content-evenly "> 
      @foreach($list as $prod) 
        <div class="card mx-2 col-md-2 col-sm-3 col-10 mb-3"  >
          <img src="{{url($prod->photo)}}" class="card-img-top rounded" alt="..." style="width: 100%; height: 100% ">
          <div class="card-body opacity-75">
            <h5 class="card-title">{{$prod->name}}</h5>
            <p class="card-text">R$ {{$prod->value}}</p>
              <div class="text-center d-grid gap-2 d-md-block">
                <form action="{{route('cart.store')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary">Comprar </button>
                  @auth
                    <input type="hidden" name="id_user"  value="{{Auth::user()->id}}">
                  @endauth
                  <input type="hidden" name="product_id" value="{{$prod->id}}">
                  <input type="hidden" name="name" value="{{$prod->name}}">
                  <input type="hidden" name="photo" value="{{$prod->photo}}">
                  <input type="hidden" name="value" value="{{$prod->value}}">
                  <input type="hidden" name="description" value="{{$prod->description}}">
                </form>
                  <a href="{{route('products.show',['product'=>$prod->id])}}"> <button type="submit" class="btn btn-outline-primary">Detalhes </button></a>
              </div>
          </div>
        </div>
      @endforeach
    
    </div>
</div>

  





@endsection