@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <div class="row">
        <div class="col-xl-6">
            <a href="{{url('producto/create')}}" class="btn btn-primary">Registrar Producto</a>
        </div>
        <div class="col-xl-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($productos as $prod)
                    <tr>
                        <td>{{$prod->prod_nombre}}</td>
                        <td>S/. {{$prod->prod_precio}}</td>
                        <td>{{$prod->prod_stock}}</td>
                        <td>
                          <a href="" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i> </a>
                          <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
