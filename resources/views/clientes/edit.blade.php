@extends('layouts.app')

@section('title', 'cliente Edit')

@section('content')
{!! Form::model($cliente, ['route' => ['cliente.update', $cliente], 'method' => 'PUT', 'files' => true])!!}

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

	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection

