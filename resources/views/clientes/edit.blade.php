@extends('layouts.app')

@section('title', 'cliente Edit')

@section('content')
<form class="form-group" method="POST" action="/cliente/{{$cliente->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" name="name" value="{{$cliente->name}}" class="form-control">
        </div>
        <div class="form-group">
                <label for="">nombre</label>
                <input type="file" name="avatar">
            </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
