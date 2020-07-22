@extends('layouts.plantilla')

@section('content')

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
    aria-controls="collapseExample">
    Crear barrio
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <div class="modal-body">
      <form action="{{route('barrio.store')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
            placeholder="Nombre del barrio" value="{{old('nombre')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-id-card"></i></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Crear</button>
      </form>

    </div>
  </div>
</div>
@include('partials.msg')
@include('partials.validacion')

<table class="table table-bordered table-hover text-center mt-2">

  <thead>
    <tr>

      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($barrios as $item)
    <tr>
      <td><small>{{$item->id}}</small> </td>
      <td><small>{{$item->nombre}} </small> </td>

     
       <td> <form action="{{ route('barrio.destroy', $item->id) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
         <button class="btn btn-danger btn-sm">Eliminar</button>
      </form> 

        <a href="{{route('barrio.edit',$item->id)}}" class="btn  btn-primary btn-sm">Editar</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection