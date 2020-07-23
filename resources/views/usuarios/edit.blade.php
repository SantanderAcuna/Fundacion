@extends('layouts.plantilla')

@section('content')

<div class="modal-body row-cols-3">

    <form action="{{route('usuarios.update', $usuarios->id)}}" method="post">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <input type="text" id="name" name="name" autofocus autocomplete="name" class="form-control"
                placeholder="Nombre" value="{{old('name', $usuarios->name )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" id="email" name="email" autofocus autocomplete="name" class="form-control"
                placeholder="Email" value="{{old('email', $usuarios->email )}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span><i class="fas fa-id-card"></i></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" id="password" name="password" autofocus autocomplete="name" class="form-control"
                placeholder="password" value="{{old('password', $usuarios->password )}}">
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