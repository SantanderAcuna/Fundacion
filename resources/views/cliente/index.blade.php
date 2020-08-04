<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Afiliaciones</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box ">
    <!-- /.login-logo -->
    <div class="card-body">
      @include('partials.msg')
      @include('partials.validacion')
      <div class="card-body login-card-body">

        <img src="admin/dist/img/fundacion.jpeg" alt="AdminLTE Logo" class="brand-image w-100 h-100 p-2">

        <form action="{{route('cliente.guardar')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <select name="tipo" id="tipo" autofocus autocomplete="name" class="form-control"
              value="{{old('tipo')}}">

              <option>Tipo documento</option>
              @foreach ($tipo  as $item)
              
              <option value="{{$item->id}}"> {{$item->nombre}}</option>
              @endforeach
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span><i class="fas fa-compass"></i></span>
              </div>
            </div>
          </div>


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
          <div class="input-group mb-3">
            <input type="text" id="direccion" name="direccion" autofocus autocomplete="address-line1"
              class="form-control" placeholder="Direccion" value="{{old('direccion')}}">
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
              @foreach ($barrios  as $item)
              
              <option value="{{$item->id}}"> {{$item->nombre}}</option>
              @endforeach
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
              <option>Seleccionar eps</option>
              @foreach ($eps as $item)

              <option value="{{$item->id}}">{{$item->nombre}}</option>

              @endforeach
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span><i class="far fa-hospital"></i></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
              </div>
            </div>
            <!-- /.col -->
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

</body>

</html>