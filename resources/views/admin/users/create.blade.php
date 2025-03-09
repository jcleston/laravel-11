@extends('admin.layouts.app')
@section('title', 'Cadastrar Usuário')
@section('content')

<h1>Novo usuário</h1>

<form action="{{ route('users.store') }}" method="post">
    @include('admin.users.partials.form')
</form>
@endsection