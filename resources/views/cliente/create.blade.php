@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Registrar Clientes</h1>
    @if (count($errors)>0)
      <div class="alert alert-danger">
        <p>Corregir los siguientes campos:</p>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
</div>
<form action="{{url('cliente')}}" method="POST" class="my-3">
    @method('POST')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="form-group">
                <label for="">DNI *</label>
                <input type="text" name="cli_dni" id="txtdni" class="form-control" required maxlength="8" minlength="8" value="{{old('cli_dni')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Apellidos *</label>
                <input type="text" name="cli_apellidos" id="txtapellidos" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('cli_apellidos')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Nombres *</label>
                <input type="text" name="cli_nombres" id="txtnombres" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('cli_nombres')}}" >
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="form-group">
                <label for="">Email *</label>
                <input type="text" name="cli_email" id="txtemail" class="form-control" maxlength="50" value="{{old('cli_email')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Tipo*</label>
                <input type="text" name="cli_tipo" id="txttipo" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('cli_tipo')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Activo*</label>
                <input type="text" name="cli_activo" id="txtactivo" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('cli_activo')}}" >
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="form-group">
                <label for="">Dirección *</label>
                <input type="text" name="cli_direccion" id="txtdireccion" class="form-control"  maxlength="50" value="{{old('cli_direccion')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">User*</label>
                <input type="text" name="cli_user" id="txtuser" class="form-control" maxlength="10" required style="text-transform:uppercase;" value="{{old('cli_user')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Password*</label>
                <input type="password" name="cli_password" id="txtpassword" class="form-control" maxlength="10" required style="text-transform:uppercase;" value="{{old('cli_password')}}" >
            </div>
        </div>
        <div class="col-xl-12 my-4">
            <div class="form-group">
                <input type="submit" value="Registrar" class="btn btn-primary">
                <a href="{{url('cliente')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection
