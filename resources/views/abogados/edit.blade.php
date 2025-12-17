@extends('layouts.app')

@section('title', 'Editar Abogado')

@section('content')

<h2 class="page-title">Editar Abogado</h2>

<form action="{{ route('abogados.update', $abogado) }}" method="POST" class="law-form">
    @csrf
    @method('PUT')

    <div class="form-grid">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $abogado->nombre }}" required>
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" value="{{ $abogado->apellido }}" required>
        </div>

        <div class="form-group">
            <label>Cédula profesional</label>
            <input type="text" name="cedula_profesional" value="{{ $abogado->cedula_profesional }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $abogado->email }}" required>
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" value="{{ $abogado->telefono }}">
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('abogados.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>

@endsection
