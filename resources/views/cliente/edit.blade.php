@extends('plantilla.plantilla')
@section('contenido')
    <section class="content-header">
        <h1>
            Modificar Cliente
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                 <h4 class="box-title">Campos Clientes</h4>
                </div>
                <form action="{{url('cliente/'.$cliente->cli_id)}}" method="POST">
                    @method('PATCH')
                    {{ csrf_field() }}
                
                    <div class="box-body">
                        <div class="form-group col-md-20">
                            <label for="">DNI</label>
                            <input type="text" value="{{$cliente->cli_dni}}" name="cli_dni" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Apellidos</label>
                            <input type="text" value="{{$cliente->cli_apellidos}}" name="cli_apellidos" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Nombres</label>
                            <input type="text" value="{{$cliente->cli_nombres}}" name="cli_nombres" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Email</label>
                            <input type="text" value="{{$cliente->cli_email}}" name="cli_email" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Tipo</label>
                            <input type="text" value="{{$cliente->cli_tipo}}" name="cli_tipo" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                             <label for="">Activo</label>
                             <input type="text" value="{{$cliente->cli_activo}}" name="cli_activo" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Dirección</label>
                            <input type="text" value="{{$cliente->cli_direccion}}" name="cli_direccion" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">User</label>
                            <input type="text" value="{{$cliente->cli_user}}" name="cli_user" class="form-control">
                        </div>
                        <div class="form-group col-md-20">
                            <label for="">Password</label>
                            <input type="password" value="{{$cliente->cli_password}}" name="cli_password" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-warning" value="Modificar">
                            <a href="{{url('cliente')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                           
                    </div>
               
                </form>
            </div>
        </div>
    </section>
@endsection