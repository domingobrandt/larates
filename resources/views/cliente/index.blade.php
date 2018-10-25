@extends('layouts.app')

@section('title', 'clients')

@section('content')

        <div class="container-fluid">
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

</div>
        <div class="col-md-8">
            <table class="table">
                    <tbody>
                            @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->name }}</td>
                            <td>{{ $cliente->slug }}</td>
                            <td>{{ $cliente->bio }}</td>
                            <td><a href="/cliente/{{$cliente->slug}}" class="btn btn-primary">More..</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->render() }}
            </div>

@endsection