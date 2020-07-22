@extends('layouts.plantilla')

@section('content')

<div class="modal-body">
    <form action="{{route('barrio.update', $barrio->id)}}" method="post">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre del barrio" value="{{old('nombre', $barrio->nombre )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>

</div>

<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Crear</button>
</form>


@endsection