@extends('administrador.plantilla')

@section('content')

<div class="container-fluid">
  <!-- /.login-logo -->
  <div class=" row card login-box">



    <div class="card-body login-card-body">
      <img src="admin/dist/img/fundacion.jpeg" alt="AdminLTE Logo" class="brand-image w-100 h-100 p-2">
      @include('partials.msg')
  @include('partials.validacion')
      <form action="{{route('cliente.guardar')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="number" id="cedula" name="cedula" autofocus autocomplete="cc-number" class="form-control"
            placeholder="Numero de cedula" value="{{old('cedula')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-id-card"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="nombre" name="nombre" autofocus autocomplete="name" class="form-control"
            placeholder="Nombre completo" value="{{old('nombre')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="far fa-edit"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="p_apellidos" name="p_apellidos" autofocus autocomplete="name" class="form-control"
            placeholder="Primer apellido" value="{{old('p_apellidos')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="far fa-edit"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="s_apellidos" name="s_apellidos" autofocus autocomplete="name" class="form-control"
            placeholder="Segundo apellido" value="{{old('s_apellidos')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="far fa-edit"></i></span>
            </div>
          </div>
        </div>
@foreach ($afi as $item)
      <small>{{$item->nombre}}</small>
@endforeach
        <div class="input-group mb-3">
          <input type="text" id="direccion" name="direccion" autofocus autocomplete="address-line1" class="form-control"
            placeholder="Direccion" value="{{old('direccion')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-street-view"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="barrio_id" id="barrio_id" autofocus autocomplete="name" class="form-control"
            value="{{old('barrio_id')}}">

            <option>Selecionar barrio</option>
            <option value="1">15 de Diciembre</option>
            <option value="2">16 de Julio</option>
            <option value="3">20 de Diciembre</option>
            <option value="4">6 de Enero</option>
            <option value="5">Aeropuerto</option>
            <option value="6">Alameda</option>
            <option value="7">Alfonso López</option>
            <option value="8">Ariguani</option>
            <option value="9">Banca del Ferrocarril</option>
            <option value="10">Brisas del río</option>
            <option value="11">Centro</option>
            <option value="12">Chambacú</option>
            <option value="13">Chimila</option>
            <option value="14">Ciudad jardín</option>
            <option value="15">Cordobita</option>
            <option value="16">Divino niño</option>
            <option value="17">El brillante</option>
            <option value="18">El Carmen</option>
            <option value="19">El jardín</option>
            <option value="20">El jumbo</option>
            <option value="21">El prado</option>
            <option value="22">El recreo</option>
            <option value="23">Faustino mojica</option>
            <option value="24">Francisco de Paula</option>
            <option value="25">Gimnasio moderno</option>
            <option value="26">Haway</option>
            <option value="27">Juan XXIII</option>
            <option value="28">La candelaria</option>
            <option value="29">La esmeralda</option>
            <option value="30">la esperanza</option>
            <option value="31">La magdalena</option>
            <option value="32">Las brisas</option>
            <option value="33">Las delicias</option>
            <option value="34">Las palmas</option>
            <option value="35">Las tablitas</option>
            <option value="36">Loma fresca</option>
            <option value="37">Los laureles</option>
            <option value="38">Los milagros</option>
            <option value="39">Los rosales</option>
            <option value="40">Palermo</option>
            <option value="41">Paz del río</option>
            <option value="42">Porvenir</option>
            <option value="43">Primero de mayo</option>
            <option value="44">Progreso</option>
            <option value="45">San Bernardo</option>
            <option value="46">San Carlos</option>
            <option value="47">San Fernando</option>
            <option value="48">san José</option>
            <option value="49">San Nicolás</option>
            <option value="50">Santa Elena</option>
            <option value="51">Simón Bolívar</option>
            <option value="52">Urbanización nueva luz</option>
            <option value="53">Urbanización Shaday</option>
            <option value="54">Urbanización illa Gladys</option>
            <option value="55">Vera Judith</option>
            <option value="56">Villa country</option>
            <option value="57">Villa Fanny</option>
            <option value="58">Villa Palmira</option>
            <option value="59">Villa Valery</option>
            <option value="60">Vista hermosa</option>

          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-compass"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" id="telefono" name="telefono" autofocus autocomplete="tel" class="form-control"
            placeholder="Numero de telefono" value="{{old('telefono')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-mobile-alt"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" autofocus autocomplete="email" class="form-control"
            placeholder="Correo electronico" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="far fa-envelope"></i></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <select name="eps_id" id="eps_id" autofocus autocomplete="name" class="form-control"
            value="{{old('eps_id')}}">
            <option>Selecionar eps</option>
            <option value="1">CAJACOPY SUBSUDUADA</option>
            <option value="2">DUSAKAWI - SUBSIDIADA </option>
            <option value="3">SALUD TOTAL - CONTRIBUTIVA </option>
            <option value="4">COOMEVA - CONTRIBUTIVA </option>
            <option value="5">FAMISANAR - CONTRIBUTIVA </option>
            <option value="6">NUEVA EPS - CONTRIBUTIVA </option>
            <option value="7">NUEVA EPS - SUBSIDIADA </option>
            <option value="8">COOSALUD - SUBSIDIADA </option>
            <option value="9">SCOMPARTA - SUBSIDIADA </option>

          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="far fa-hospital"></i></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</div>



@endsection