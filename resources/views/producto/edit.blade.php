@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Modificar Producto</h1>
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
    <div class="form-group col-md-3">
        <label for="">Categoria *</label>
        <select name="" id="" class="form-control">
            @foreach ($categorias as $cat)
                @if ($cat->cat_id == $producto->cat_id)
                <option value="{{$cat->cat_id}}" selected>{{$cat->cat_nombre}}</option> 
                @endif
            @endforeach
        </select>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Nombre *</label>
                <input type="text" name="prod_nombre" class="form-control" maxlength="50" readonly value="{{$producto->prod_nombre}}">
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="form-group">
                <label for="">Abreviatura del Producto *</label>
                <input type="text" name="prod_slug" class="form-control" maxlength="50" value="{{$producto->prod_slug}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Descripcion *</label>
                <input type="text" name="prod_descripcion" class="form-control" maxlength="50" required value="{{$producto->prod_descripcion}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Descripcion Corta del Producto *</label>
                <input type="text" name="prod_extract" class="form-control" maxlength="50" required value="{{$producto->prod_extract}}">
            </div>
        </div>
        <div class="col-xl-2 col-md-3">
            <div class="form-group">
                <label for="">Precio *</label>
                <input type="text" name="prod_precio" class="form-control" maxlength="50" required value="{{$producto->prod_precio}}" >
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Imagen *</label>
                <input type="text" name="prod_imagen" class="form-control" maxlength="50" readonly value="{{$producto->prod_imagen}}">
            </div>
        </div>
        <div class="col-xl-2 col-md-3">
            <div class="form-group">
                <label for="">Stock *</label>
                <input type="text" name="prod_stock" class="form-control" maxlength="4" required value="{{$producto->prod_stock}}" >
            </div>
        </div>
        <div class="col-xl-2 col-md-3">
            <div class="form-group">
                <label for="">visible</label>
                <input type="text" name="prod_visible" class="form-control" maxlength="4" readonly value="{{$producto->prod_visible}}" >
            </div>
        </div>
        <div class="col-xl-12 my-4">
            <div class="form-group">
                <input type="submit" value="Modificar" class="btn btn-warning">
                <a href="{{url('producto')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection