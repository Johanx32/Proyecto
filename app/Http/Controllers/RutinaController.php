<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use App\Models\Ejercicio;
use App\Models\Entrenador;
use App\Models\Cliente;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index()
    {
        $rutina = Rutina::orderByDesc('id')->get();
        return view('auth.rutina.index', compact('rutina'));
    }

    public function create()
    {
        $ejercicio = Ejercicio::All();
        $entrenador = Entrenador::All();
        $cliente = Cliente::All();

        return view('auth.rutina.create')->with('ejercicio', $ejercicio)->with('entrenador', $entrenador)->with('cliente', $cliente);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Rutina' => ' required| max:50',
                'objetivo' => 'required| max:50',
                'estado_Rutina' => 'required',
                'id_Ejercicio_FK' => 'required',
                'identificacion_Entrenador_FK' => 'required',
                'identificacion_Cliente_FK' => 'required'
            ]
        );

        $rutina = Rutina::create($datos);
        return view('auth.rutina.creado');
    }

    public function show(Rutina $rutina)
    {
        //
    }

    public function edit(Rutina $rutina)
    {
        $ejercicio = Ejercicio::All();
        $entrenador = Entrenador::All();
        $cliente = Cliente::All();
        return view('auth.rutina.edit', compact('rutina'))->with('ejercicio', $ejercicio)->with('entrenador', $entrenador)->with('cliente', $cliente);
    }

    public function update(Request $request, Rutina $rutina)
    {
        $datos = $request->validate(
            [
                'nombre_Rutina' => ' required| max:50',
                'objetivo' => 'required| max:50',
                'estado_Rutina' => 'required',
                'id_Ejercicio_FK',
                'identificacion_Entrenador_FK',
                'identificacion_Cliente_FK'
            ]
        );

        $rutina->update($datos);
        return view('auth.rutina.actualizado');
    }

    public function destroy(Rutina $rutina)
    {
        $rutina->delete();
        return view('auth.rutina.borrado');
    }
}
