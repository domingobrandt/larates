@extends('layouts.app')

@section('title', 'List create')

@section('content')
<form class="form-group" method="POST" action="/list">
    @csrf
        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">guardar</button>
</form>

@endsection
