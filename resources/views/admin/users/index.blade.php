@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista degli Utenti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
