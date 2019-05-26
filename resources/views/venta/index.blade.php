@extends('plantilla.plantilla')
@section('contenido')
<div class="mb-4">
    <div class="row">
        <div class="col-xl-6">
            <a href="{{url('ventas/create')}}" class="btn btn-primary">Nueva Venta</a>
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
@endsection
