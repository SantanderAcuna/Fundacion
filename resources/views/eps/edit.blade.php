@extends('layouts.plantilla')

@section('content')

<div class="modal-body row-cols-3">

    <form action="{{route('eps.update', $eps->id)}}" method="post">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input type="text" id="codigo" name="codigo" autofocus autocomplete="name" class="form-control"
                placeholder="Codigo" value="{{old('codigo', $eps->codigo )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre de la eps" value="{{old('nombre', $eps->nombre )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" id="regimen" name="regimen" autofocus autocomplete="name" class="form-control"
                placeholder="Regimen" value="{{old('regimen', $eps->regimen )}}">
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