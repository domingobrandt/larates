@extends('layouts.app')

@section('title', 'empresa')

@section('content')
@include('common.success')
<div class="text-center">
<img style=" margin-top: 25px; width: 200px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block"  src="{{$empresa->avatar}}" alt="{{$empresa->avatar}}">
     <h5 class="card-title">{{$empresa->name}}</h5>
     <p class="card-text">{{$empresa->bio}}</p>
     <a href="/empresa/{{$empresa->slug}}/edit" class="btn btn-primary"> Editar </a>

     {!! Form::open([ 'route' => ['empresa.destroy', $empresa->slug], 'method' => 'DELETE']) !!}
     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
 {!! Form::close() !!}
</div>
@endsection
