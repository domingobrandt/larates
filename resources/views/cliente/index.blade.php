@extends('layouts.app')

@section('title', 'clients')

@section('content')
<div class="container">
        <div class="row">
                @foreach($clientes as $cliente)
          <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 50px;">
                    <img style=" margin-top: 25px;
                    width: 60%; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$cliente->avatar}}" alt="{{$cliente->avatar}}">
                 <div class="card-body">
                    <h5 class="card-title">{{$cliente->name}}</h5>
                    <p class="card-text">{{$cliente->bio}}</p>
                    <a href="/cliente/{{$cliente->slug}}" class="btn btn-primary">Ver mas..</a>
                    </div>
                 </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection