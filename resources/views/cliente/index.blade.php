@extends('layouts.app')

@section('title', 'clients')

@section('content')



<div class="container-text-center" align="center">
        <div class="col-md-8" >
                <h4> Find Clients </h4>
                {{ Form::open(['route' => 'cliente.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                <div class="form-group">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
                </div>
                <div class="form-group">
                    {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) }}
                </div>
                <div class="form-group">
                    {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) }}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Find
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            {{ Form::close() }}
            <table class="table table-hover table-bordered">
                    
                    <tbody>
                            @foreach($clientes as $cliente)
                        <tr>
                            <td scope="row">{{ $cliente->id }}</td>
                            <td scope="row">{{ $cliente->name }}</td>
                            <td scope="row">{{ $cliente->slug }}</td>
                            <td scope="row">{{ $cliente->bio }}</td>
                            <td scope="row"><a href="/cliente/{{$cliente->slug}}" class="btn btn-primary">More..</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->render() }}
            </div>
            <a href="/cliente/card"  class="btn btn-default">Another View</a>
        </div>    

@endsection