@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <h1>Registrar Producto</h1>
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
        <select name="cat_id" id="" class="form-control">
            <option value="" hidden>----Seleccione----</option>
            @foreach($categorias as $cat)
             <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
            @endforeach
           </select>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Nombre *</label>
                <input type="text" name="prod_nombre" class="form-control" maxlength="50" required value="{{old('prod_nombre')}}">
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="form-group">
                <label for="">Abreviatura del Producto *</label>
                <input type="text" name="prod_slug" class="form-control" maxlength="50" required value="{{old('prod_nombre')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Descripcion *</label>
                <input type="text" name="prod_descripcion" class="form-control" maxlength="50" required value="{{old('prod_nombre')}}">
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Descripcion Corta del Producto *</label>
                <input type="text" name="prod_extract" class="form-control" maxlength="50" required value="{{old('prod_nombre')}}">
            </div>
        </div>
        <div class="col-xl-2 col-md-3">
            <div class="form-group">
                <label for="">Precio *</label>
                <input type="text" name="prod_precio" class="form-control" maxlength="50" required value="{{old('prod_precio')}}" >
            </div>
        </div>
        <div class="col-xl-5 col-md-6">
            <div class="form-group">
                <label for="">Imagen *</label>
                <input type="text" name="prod_imagen" class="form-control" maxlength="50" required value="{{old('prod_nombre')}}">
            </div>
        </div>
        <div class="col-xl-2 col-md-3">
            <div class="form-group">
                <label for="">Stock *</label>
                <input type="text" name="prod_stock" class="form-control" maxlength="4" required value="{{old('prod_stock')}}" >
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
