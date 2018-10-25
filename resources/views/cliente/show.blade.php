@extends('layouts.app')

@section('title', 'cliente')

@section('content')
@include('common.success')

<img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="/images/{{$cliente->avatar}}" alt="{{$cliente->avatar}}">
     <h5 class="card-title">{{$cliente->name}}</h5>
     <p class="card-text">{{$cliente->bio}}</p>
     <a href="/cliente/{{$cliente->slug}}/edit" class="btn btn-primary">Editar.</a>

     {!! Form::open([ 'route' => ['cliente.destroy', $cliente->slug], 'method' => 'DELETE']) !!}
     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
 {!! Form::close() !!}

@endsection
