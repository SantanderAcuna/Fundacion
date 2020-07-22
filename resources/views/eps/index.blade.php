@extends('layouts.plantilla')

@section('content')

<div class="container-fluid">

  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
      aria-controls="collapseExample">
      Crear eps
    </a>
  </p>

  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <form action="{{route('eps.store')}}" method="post">
              @csrf
              <div class="input-group mb-3">
                <input type="text" id="codigo" name="codigo" autofocus autocomplete="name" class="form-control"
                  placeholder="Codigo de la eps" value="{{old('codigo')}}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-3">
              <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre de la eps" value="{{old('nombre')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span><i class="fas fa-id-card"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-3">
              <input type="text" id="regimen" name="regimen" autofocus autocomplete="name" class="form-control"
                placeholder="Regimen" value="{{old('regimen')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span><i class="fas fa-id-card"></i></span>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-sm ml-3">Crear</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.msg')
@include('partials.validacion')

<table class="table table-bordered table-hover text-center">
  <thead>
    <tr>

      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Regimen</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($eps as $item)
    <tr>



      <td><small>{{$item->codigo}} </small> </td>
      <td><small>{{$item->nombre}} </small> </td>
      <td><small>{{$item->regimen}} </small> </td>

      <td><small class="d-inline-flex">
          <form action="{{route('eps.destroy',$item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <a href="#" type="submit" class="btn  btn-danger btn-sm">Eliminar</a>

          </form>

          <a href="#" class="ml-1 btn  btn-primary btn-sm">Editar</a>
        </small></td>
    </tr>
    @endforeach

  </tbody>
</table>


@endsection