@extends('admin.layouts.app')
@section('title', 'Usuários')
@section('content')

<h1>Usuários</h1>

<a href="{{ route('users.create') }}">Criar usuário</a>

@if (session()->has('success'))
{{session('success')}}
@endif

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="100">Nenhum usuário cadastrado</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{ $users->links() }}


@endsection