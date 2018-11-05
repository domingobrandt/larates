@extends('layouts.app')

@section('title', 'Users')

@section('content')
        <div class="container-text-center" align="center">
        <div class="col-md-8">
            <h4>Users Table</h4>
            <table class="table table-hover table-bordered">
                    <tbody>
                            @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td scope="row">{{ $user->name }}</td>
                            <td scope="row">{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection