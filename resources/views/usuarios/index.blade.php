@extends('administrador.plantilla')

@section('content')
<div class="container-fluid">

  @auth
  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
      aria-controls="collapseExample">
      Crear usuarios
    </a>
  </p>

  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <form action="" method="post">
              @csrf
              <div class="input-group mb-4">
                <input type="text" id="name" name="name" autofocus autocomplete="name" class="form-control"
                  placeholder="Nombre completo" value="{{old('name')}}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-4">
              <input type="email" id="email" name="email" autofocus autocomplete="name" class="form-control"
                placeholder="Correo electronico" value="{{old('email')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span><i class="fas fa-id-card"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-4">
              <input type="password" id="password" name="password" autofocus autocomplete="name" class="form-control"
                placeholder="Contraseña" value="{{old('password')}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span><i class="fas fa-id-card"></i></span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <button type="submit" class="btn btn-primary  ml-3">Crear</button>
        </form>
      </div>
    </div>
  </div>
  @endauth
 @include('partials.msg')
  @include('partials.validacion')
  <div class=" container-fluid p-1"></div>
  <table class="table table-bordered table-hover text-center">
    <thead>
      <tr>


        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Accion</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($usuario as $item)
      <tr>


        <td><small>{{$item->name}} {{$item->p_apellidos}} </small> </td>
        <td><small>{{$item->email}} </small> </td>

        <td><small class="d-inline-flex">
            <form action="{{route('usuarios.destroy', $item->id)}}" method="post">
              @csrf
              @method('DELETE')
             
              <a href="#" type="submit" class=" btn  btn-danger btn-sm">Eliminar</a>
            </form>
            <a href="#" class="ml-1 btn  btn-primary btn-sm">Editar</a>
          </small> </td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
@endsection