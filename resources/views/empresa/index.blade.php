@extends('layouts.app')

@section('title', 'clients')

@section('content')

<div class="container-text-center" align="center">
        <div class="col-md-8">
                <h4> Find Clients </h4>
                {{ Form::open(['route' => 'empresa.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                            @foreach($empresas as $empresa)
                        <tr>
                            <td scope="row">{{ $empresa->id }}</td>
                            <td scope="row">{{ $empresa->name }}</td>
                            <td scope="row">{{ $empresa->slug }}</td>
                            <td scope="row">{{ $empresa->bio }}</td>
                            <td scope="row"><a href="/empresa/{{$empresa->slug}}" class="btn btn-primary">More..</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $empresas->render() }}
            </div>
        </div>
@endsection