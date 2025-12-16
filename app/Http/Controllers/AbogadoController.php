<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbogadoController extends Controller
{
    public function index()
    {
        $abogados = Abogado::orderBy('id', 'desc')->get();
        return view('abogados.index', compact('abogados'));
    }

    public function create()
    {
        return view('abogados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula_profesional' => 'required|unique:abogados',
            'email' => 'required|email|unique:abogados',
            'telefono' => 'nullable'
        ]);

        Abogado::create($request->all());

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado creado correctamente');
    }

    public function edit(Abogado $abogado)
    {
        return view('abogados.edit', compact('abogado'));
    }

    public function update(Request $request, Abogado $abogado)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula_profesional' => 'required|unique:abogados,cedula_profesional,' . $abogado->id,
            'email' => 'required|email|unique:abogados,email,' . $abogado->id,
            'telefono' => 'nullable'
        ]);

        $abogado->update($request->all());

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado actualizado');
    }

    public function destroy(Abogado $abogado)
    {
        $abogado->delete();

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado eliminado');
    }
}

