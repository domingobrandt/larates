@extends('layouts.app')

@section('title', 'clients')

@section('content')

        <div class="container-fluid">
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

</div>
        <div class="col-md-8">
            <table class="table">
                    <tbody>
                            @foreach($empresas as $empresa)
                        <tr>
                            <td>{{ $empresa->id }}</td>
                            <td>{{ $empresa->name }}</td>
                            <td>{{ $empresa->slug }}</td>
                            <td>{{ $empresa->bio }}</td>
                            <td><a href="/empresa/{{$empresa->slug}}" class="btn btn-primary">More..</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $empresas->render() }}
            </div>

@endsection