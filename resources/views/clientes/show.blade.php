@extends('layouts.app')

@section('title', 'cliente')

@section('content')

<img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$cliente->avatar}}" alt="{{$cliente->avatar}}">
     <h5 class="card-title">{{$cliente->name}}</h5>
     <a href="/cliente/{{$cliente->slug}}/edit" class="btn btn-primary">Editar.</a>


@endsection
