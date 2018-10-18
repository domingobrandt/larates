@extends('layouts.app')

@section('title', 'clientes create')

@section('content')
@if($errors->any())

@foreach ($errors->all() as $error)
<script>window.alert("{{$error}}")</script>
@endforeach  

@endif


{!! Form::open(['route' => 'cliente.store', 'method' => 'POST', 'files' => true ]) !!}
    <div class="form-group">
        {!!Form::label('name','Nombre')!!}
        {!!Form::text('name',null,['class'=>'form-control'])!!}
    </div>

     <div class="form-group">
        {!!Form::label('slug','Slug')!!}
        {!!Form::text('slug',null,['class'=>'form-control'])!!}
     </div>
 
    <div class="form-group">
        {!!Form::label('avatar','Avatar')!!}
        {!!Form::file('avatar')!!}
    </div>

{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

{!! Form::close()!!}

@endsection
