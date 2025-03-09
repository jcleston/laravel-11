@extends('admin.layouts.app')
@section('title', 'Editar Usuário')
@section('content')

<h1>Editar usuário {{ $user->name }}</h1>
<x-alert />

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('admin.users.partials.form')
</form>
@endsection