@extends('administrador.plantilla')

@section('content')
<div class="container-fluid">

<a href="{{url('administrador/export-listado')}}" class="btn btn-primary btn-sm">Exportar</a>
  
<div class="p-1"></div>

  <table class="table table-bordered table-hover text-center ">
    <thead>
      <tr>

        <th scope="col">Cedula</th>
        <th scope="col">Nombre completo</th>
        <th scope="col">Direccion</th>
        <th scope="col">Barrio</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Eps</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($afi as $item)
      <tr>

        <td><small>{{$item->cedula}} </small> </td>
        <td><small>{{$item->nombre}} {{$item->p_apellidos}} </small> </td>
        <td><small>{{$item->direccion}} </small> </td>
        <td><small>{{$item->barrio}} </small> </td>
        <td><small>{{$item->telefono}} </small> </td>
        <td><small>{{$item->email}} </small> </td>
        <td><small>{{$item->eps}} </small> </td>
        <td><small><a href="#" class="btn  btn-danger btn-sm">Eliminiar</a>
          <a href="#" class="btn  btn-primary btn-sm">Editar</a></td></small>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
@endsection