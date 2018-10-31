@extends('layouts.app')

@section('title', 'empresa Edit')

@section('content')

{!! Form::model($empresa, ['route' => ['empresa.update', $empresa], 'method' => 'PUT', 'files' => true])!!}

@include('cliente.form')

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection

