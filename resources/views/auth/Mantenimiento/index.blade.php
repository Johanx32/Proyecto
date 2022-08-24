@extends('auth.tema.app')

@section('title', "Listado de Mantenimientos")

@section('contenido')
    <h3>Listado de Mantenimientos</h3>
    <div class="col-sm-12">
                <a href="{{ route('mantenimiento.create') }}" class="btn btn-link">Crear mantenimiento</a>
                <a href="{{ route('mantenimiento.index') }}" class="btn btn-link">Listar mantenimientos</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Tipo Mantenimiento
                </th>
                <th>
                    Diagnostico Mantenimiento
                </th>
                <th>
                    Fecha Inicio
                </th>
                <th>
                    Fecha Fin
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mantenimiento as $mantenimiento)
            <tr>
                <td>
                    {{ $mantenimiento->id}}
                </td>
                <td>
                    {{ $mantenimiento->tipo_Mantenimiento }}
                </td>
                <td>
                    {{ $mantenimiento->diagnostico_Manteni }}
                </td>
                <td>
                    {{ $mantenimiento->fecha_Inicio }}
                </td>
                <td>
                    {{ $mantenimiento->fecha_Fin }}
                </td>
                <td>
                    {{ $mantenimiento->estado_Mantenimiento() }}
                </td>
                <td>
                    <form action="{{ route('mantenimiento.destroy', $mantenimiento) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('mantenimiento.edit', $mantenimiento) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection