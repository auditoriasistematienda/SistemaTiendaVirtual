@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Nueva Venta</h1>
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
<form action="{{url('cita')}}" method="post">
  @method('POST')
  {{ csrf_field() }}
    <div class="row">
        <div class="col-xl-8">
            <div class="form-group">
                <label>Cliente *</label>
                <select name="" class="form-control selectpicker" data-live-search="true" required>
                  <option value="" hidden>--- Seleccione ---</option>
                  @foreach($clientes as $cli)
                    <option value="{{$cli->cli_id}}">{{$cli->cli_dni.' - '.$cli->cli_apellidos.', '.$cli->cli_nombres}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="form-group">
                <label>Fecha *</label>
                <input type="date" name="cit_fecha" value="<?php echo date('Y-m-d'); ?>" class="form-control" required readonly>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="form-group">
                <label>Productos *</label>
                <select name="" class="form-control selectpicker" data-live-search="true" required>
                  <option value="" hidden>--- Seleccione ---</option>
                  @foreach($productos as $prod)
                    <option value="{{$prod->prod_id}}">{{$prod->prod_nombre}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="form-group">
                <label>Cantidad *</label>
                <input type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="form-group">
                <label>Stock *</label>
                <input type="number" class="form-control" required readonly>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="form-group">
                <label>Precio Venta *</label>
                <input type="number" class="form-control" required readonly>
            </div>
        </div>
        <div class="col-xl-2 align-self-center">
            <div class="form-group">
                <button type="button" class="btn btn-sm btn-primary" name="button">Agregar</button>
            </div>
        </div>
        <table class="table">
          <thead>
            <th>Opciones</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>SubTotal</th>
          </thead>
          <tfoot>
            <th>TOTAL</th>
            <th></th>
            <th></th>
            <th></th>
            <th><h4>S/. 0.00</h4><input type="hidden" name="" value=""></th>
          </tfoot>
          <tbody>

          </tbody>
        </table>

        <div class="col-xl-12 my-4">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Rgistrar Venta">
                <a href="{{url('ventas')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection
