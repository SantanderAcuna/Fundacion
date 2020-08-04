@extends('layouts.plantilla')

@section('content')

<div class="container-fluid table-responsive{-sm|-md|-lg|-xl}">

    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Crear Tipo
        </a>
    </p>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <form action="{{route('tipo.store')}}" method="post">
                            @csrf

                    </div>
              
                    <div class="col-4">
                        <div class="input-group mb-2">
                            <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control" placeholder="Crear tipo Documento" value="{{old('nombre')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span><i class="fas fa-id-card"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm ml-1">Crear</button>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.msg')
@include('partials.validacion')

<table class="table table-bordered table-hover text-center table-responsive{-sm|-md|-lg|-xl}">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo Docuento</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipo as $item)
        <tr>
            <td><small>{{$item->id}} </small> </td>
            <td><small>{{$item->nombre}} </small> </td>

            <td><small class="d-inline-flex">
                    <form action="{{route('tipo.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn  btn-danger btn-sm">Eliminar</button>

                    </form>

                    <a href="{{route('tipo.edit',$item->id)}}" class="ml-1 btn  btn-primary btn-sm">Editar</a>
                </small></td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection