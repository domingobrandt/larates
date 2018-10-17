@extends('layouts.app')

@section('title', 'clientes')

@section('content')

<div class="row">
    @foreach ($clientes as $cliente)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 50px;">
                    <img style=" margin-top: 25px;
                     width: 60%; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$cliente->avatar}}" alt="{{$cliente->avatar}}">
                <div class="card-body">
                    <h5 class="card-title">{{$cliente->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/cliente/{{$cliente->slug}}" class="btn btn-primary">Ver mas..</a>
                 </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection
