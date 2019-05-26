@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Registrar Paciente</h1>
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
<form action="{{url('producto')}}" method="POST" class="my-3">
    @method('POST')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="form-group">
                <label for="">DNI *</label>
                <input type="text" name="pac_dni" id="txtdni" class="form-control" required maxlength="8" minlength="8" value="{{old('pac_dni')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Apellidos *</label>
                <input type="text" name="pac_apellidos" id="txtapellidos" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('pac_apellidos')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Nombres *</label>
                <input type="text" name="pac_nombres" id="txtnombres" class="form-control" maxlength="50" required style="text-transform:uppercase;" value="{{old('pac_nombres')}}" >
            </div>
        </div>
        <div class="col-xl-12 my-4">
            <div class="form-group">
                <input type="submit" value="Registrar" class="btn btn-primary">
                <a href="{{url('producto')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection
