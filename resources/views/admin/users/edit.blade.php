@extends('admin.layouts.app')
@section('title', 'Editar Usuário')
@section('content')

<h1>Editar usuário {{ $user->name }}</h1>
<x-alert />

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf()
    @method('PUT')
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
    <input type="text" name="email" placeholder="Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha">

    <button type="submit">Editar</button>
</form>
@endsection