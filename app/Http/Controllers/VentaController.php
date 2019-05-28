<?php

namespace App\Http\Controllers;

use App\Venta;
use App\DetalleVenta;
use Illuminate\Http\Request;
use DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('ventas')
                    ->join('clientes','clientes.cli_id','ventas.ven_idcliente')
                    ->get();
        return view('venta.index',['ventas'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::table('clientes')->get();
        $productos = DB::table('productos')->get();
        return view('venta.create',['clientes'=>$clientes,'productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
          'ven_idcliente' => 'required',
          'ven_fecha' => 'required',
          'ven_total' => 'required'
        ]);
        $data = $request->all();
        print_r(($data['total'][1]));*/

        $this->validate($request,[
          'ven_idcliente' => 'required',
          'ven_fecha' => 'required',
          'ven_total' => 'required'
        ]);
        $data = $request->all();
        $venta = Venta::create($data);

        $cont = 0;
        while ($cont < COUNT($data['idproducto'])) {
          $dv = new DetalleVenta();
          $dv->dv_idventa = $venta->ven_id;
          $dv->dv_idproducto = $data['idproducto'][$cont];
          $dv->dv_cantidad = $data['cantidad'][$cont];
          $dv->dv_total = $data['total'][$cont];
          $dv->save();
          $cont = $cont + 1;
        }

        return redirect()->route('ventas.index')->with('status', 'Venta registrada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
