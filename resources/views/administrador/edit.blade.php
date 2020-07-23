@extends('layouts.plantilla')

@section('content')

<div class="modal-body row-cols-3">

    <form action="{{route('administrador.update', $adm->id)}}" method="post">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre del barrio" value="{{old('nombre', $adm->nombre )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
</div>




@endsection