@extends('admin.layouts.app')
@section('title', 'Cadastrar Usuário')
@section('content')

<h1>Novo usuário</h1>

<x-alert />

<form action="{{ route('users.store') }}" method="post">
    @csrf()
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha">

    <button type="submit">Cadastrar</button>
</form>
@endsection