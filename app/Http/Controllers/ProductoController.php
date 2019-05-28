<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('productos')
                    ->join ('categorias','categorias.cat_id','productos.cat_id')
                    ->get();
        return view('producto.index',['productos'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('categorias')->get();
        return view('producto.create',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'prod_nombre' => 'required|max:50',
        'prod_slug' => 'required|max:50' ,
        'prod_descripcion' => 'required|max:50' ,
        'prod_extract' => 'required|max:50' ,
        'prod_precio' => 'required|numeric',
        'prod_visible' => 'null all',
        'prod_stock' => 'required|numeric'
      ]);
      $data = $request->all();
      $prod = Producto::create($data);
      return redirect()->route('producto.index')->with('status', 'Producto agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = DB::table('categorias')
                    ->get();
        return view('producto.edit',['producto'=>$producto,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $request, $id)
    {
                
        $producto = Producto::destroy($id);
        
        
        return redirect()->route('producto.index')->with('status', 'Producto eliminado correctamente!');
    }
}
