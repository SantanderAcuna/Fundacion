@extends('layouts.plantilla')

@section('content')

<div class="modal-body row-cols-3">
@include('partials.msg')
@include('partials.validacion')
    <form action="{{route('tipo.update', $tipo->id)}}" method="post">
        @csrf
        @method('put')
      
        <div class="input-group mb-3">
            <input type="text" id="tipo" name="tipo" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre de la eps" value="{{old('tipo', $tipo->nombre )}}">
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