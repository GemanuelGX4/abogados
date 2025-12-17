@extends('layouts.app')

@section('title', 'Nuevo Abogado')

@section('content')

<h2 class="page-title">Registrar Nuevo Abogado</h2>

<form action="{{ route('abogados.store') }}" method="POST" class="law-form">
    @csrf

    <div class="form-grid">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" value="{{ old('apellido') }}" required>
        </div>

        <div class="form-group">
            <label>Cédula profesional</label>
            <input type="text" name="cedula_profesional"
                   value="{{ old('cedula_profesional') }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" value="{{ old('telefono') }}">
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">
            Guardar Abogado
        </button>

        <a href="{{ route('abogados.index') }}" class="btn btn-secondary">
            Cancelar
        </a>
    </div>
</form>

@endsection
