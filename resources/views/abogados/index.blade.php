@extends('layouts.app')

@section('title', 'Abogados')

@section('content')

<div class="page-header">
    <h2 class="page-title">Listado de Abogados</h2>

    <a href="{{ route('abogados.create') }}" class="btn btn-primary">
        + Nuevo Abogado
    </a>
</div>

<div class="table-responsive">
    <table class="law-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Email</th>
                <th class="text-right">Acciones</th>
            </tr>
        </thead>

        <tbody>
        @forelse($abogados as $abogado)
            <tr>
                <td data-label="Nombre">
                    <strong>{{ $abogado->nombre }} {{ $abogado->apellido }}</strong>
                </td>

                <td data-label="Cédula">
                    {{ $abogado->cedula_profesional }}
                </td>

                <td data-label="Email">
                    {{ $abogado->email }}
                </td>

                <td data-label="Telefono">
                    {{ $abogado->telefono }}
                </td>

                <td data-label="Acciones">
                    <div class="actions">
                        <a href="{{ route('abogados.edit', $abogado) }}"
                           class="action edit">
                            Editar
                        </a>

                        <form action="{{ route('abogados.destroy', $abogado) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="action delete"
                                    onclick="return confirm('¿Eliminar abogado?')">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="empty-row">
                    No hay abogados registrados
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection
