@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Cliente</h3>
    <div class="col-sm-12">
                <a href="{{ route('cliente.create') }}" class="btn btn-link">Crear Cliente</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar Clientes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-link">Volver</a>
            </div>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="nombre_Clie" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Clie" class="form-control" id="nombre_Clie"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="apellido_Clie" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Clie" class="form-control" id="apellido_Clie"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Clie" class="form-label">Fecha Nacimiento:</label><br>
                <input type="date" name="fecha_Nac_Clie" class="form-control" id="fecha_Nac_Clie"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Clie" class="form-label">Telefono:</label><br>
                <input type="text" name="telefono_Clie" class="form-control" id="telefono_Clie"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Clie" class="form-label">Direccion:</label><br>
                <input type="text" name="direccion_Clie" class="form-control" id="direccion_Clie"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="identificacion_Usuario_FK" class="form-label">Identificacion Usuario</label><br>
                <input type="text" name="identificacion_Usuario_FK" class="form-control" id="identificacion_Usuario_FK"><br><br>
            </div>

            <div class="col-sm-6"><br><br>
                <label for="estado_Clie" class="form-label">Estado</label><br>
                <select name="estado_Clie" id="estado_Clie" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>

        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection