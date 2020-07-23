@extends('layouts.plantilla')

@section('content')
<div class="row-cols-6">

    <div class="container-sm">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Accion</th>
                    <th scope="col">Importar</th>
                    <th scope="col">Exportar</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><small class="text-gray">Afiliados</small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-upload"></i></small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-download"></i></small></td>
                </tr>
                <tr>
                    <td><small class="text-gray">Usuarios</small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-upload"></i></small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-download"></i></small></td>
                </tr>
                <tr>
                    <td><small class="text-gray">Eps</small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-upload"></i></small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-download"></i></small></td>
                </tr>
                <tr>
                    <td><small class="text-gray">Barrios</small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-upload"></i></small></td>
                    <td><small class="btn btn-info"><i class="fas fa-file-download"></i></small></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection