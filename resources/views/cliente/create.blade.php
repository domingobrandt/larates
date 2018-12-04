@extends('layouts.app')

@section('title', 'clientes create')

@section('content')

@include('common.success')

@include('common.errors')

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
            {!!Form::label('bio','Descripcion')!!}
            {!!Form::text('bio',null,['class'=>'form-control'])!!}
    </div>
 
    <div class="form-group">
        {!!Form::label('avatar','Avatar')!!}
        {!!Form::file('avatar',['class' => 'btn btn-warning'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('job_id','Descripcion')!!}
        {!!Form::select('job_id',$job_id,null,['class'=>'form-control'])!!}
    </div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close()!!}

@endsection
