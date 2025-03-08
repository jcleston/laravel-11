@extends('admin.layouts.app')
@section('title', 'Cadastrar Usuário')
@section('content')

<h1>Novo usuário</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf()
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">

    <button type="submit">Cadastrar</button>
</form>
@endsection