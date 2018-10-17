@extends('layouts.app')

@section('title', 'clientes')

@section('content')

<div class="row">
    @foreach ($clientes as $cliente)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/{{$cliente->avatar}}" alt="{{$cliente->avatar}}">
                <div class="card-body">
                    <h5 class="card-title">{{$cliente->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection
