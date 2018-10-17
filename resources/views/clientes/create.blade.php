@extends('layouts.app')

@section('title', 'clientes create')

@section('content')
<form class="form-group" method="POST" action="/cliente" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
                <label for="">nombre</label>
                <input type="file" name="avatar">
            </div>
        <button type="submit" class="btn btn-primary">guardar</button>
</form>

@endsection
