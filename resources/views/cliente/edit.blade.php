@extends('layouts.app')

@section('title', 'cliente Edit')

@section('content')

{!! Form::model($cliente, ['route' => ['cliente.update', $cliente], 'method' => 'PUT', 'files' => true])!!}

@include('cliente.form')

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection

