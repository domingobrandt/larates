@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
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
            </div>
        </div>
@endsection