@extends('layouts.app')

@section('title', 'Editar Abogado')

@section('content')
    <h2>Editar Abogado</h2>

    <form method="POST" action="{{ route('abogados.update', $abogado) }}">
        @csrf
        @method('PUT')

        <input name="nombre" value="{{ $abogado->nombre }}" required>
        <input name="apellido" value="{{ $abogado->apellido }}" required>
        <input name="cedula_profesional" value="{{ $abogado->cedula_profesional }}" required>
        <input type="email" name="email" value="{{ $abogado->email }}" required>
        <input name="telefono" value="{{ $abogado->telefono }}">

        <button class="primary">Actualizar</button>
        <a href="{{ route('abogados.index') }}">Cancelar</a>
    </form>
@endsection
