<?php
  $nro_clientes = DB::table('clientes')->count();
  $nro_productos = DB::table('productos')->count();
  $nro_categorias = DB::table('categorias')->count();
  $nro_ventas = DB::table('ventas')->count();
  
?>
@extends('plantilla.plantilla')
@section('contenido')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs text-primary text-uppercase mb-1">Clientes</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nro_clientes}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs text-primary text-uppercase mb-1">Productos</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nro_productos}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs text-primary text-uppercase mb-1">Categorias</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nro_categorias}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-hospital fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs text-primary text-uppercase mb-1">Ventas</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nro_ventas}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-folder fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
