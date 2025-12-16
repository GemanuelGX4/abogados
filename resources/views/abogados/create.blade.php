@extends('layouts.app')

@section('title', 'Registrar Abogado')

@section('content')
    <h2>Registrar Abogado</h2>

    <form method="POST" action="{{ route('abogados.store') }}">
        @csrf

        <input name="nombre" placeholder="Nombre" required>
        <input name="apellido" placeholder="Apellido" required>
        <input name="cedula_profesional" placeholder="Cédula profesional" required>
        <input type="email" name="email" placeholder="Correo" required>
        <input name="telefono" placeholder="Teléfono">

        <button class="primary">Guardar</button>
        <a href="{{ route('abogados.index') }}">Cancelar</a>
    </form>
@endsection
