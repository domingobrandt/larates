@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
        <div class="container-fluid">
        <h4> Find Users </h4>
        {{ Form::open(['route' => 'Users.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
        <div class="form-group">
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>
        <div class="form-group">
            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
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
                            @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->render() }}
            </div>
        </div>
@endsection