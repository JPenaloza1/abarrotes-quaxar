<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de todos los productos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate(10000);
        return view('producto.index', $datos);
    }

    /**
     * Mostrar el formulario para crear un producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'producto.create' );
    }

    /**
     * Guardar el nuevo producto en la bd
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'Producto'  => 'required' ,
            'Caducidad' => 'required' ,
            'Cantidad'  => 'required' ,
            'Precio'    => 'required'
        ];

        $mensaje =[
            'required' => 'El :attribute no contiene información, favor de completarlo.'
        ];

        $this -> validate($request , $campos , $mensaje);

        $datosProducto = request() -> except('_token');

        Producto::insert($datosProducto);

        return redirect('productos') -> with('mensaje' , 'El producto ha sido añadido con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Mostrar el formulario para editar un producto.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);

        return view('producto.edit', compact('producto') );
    }

    /**
     * Actualiza el producto en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request() -> except( ['_token', '_method'] );
        Producto::where('id','=',$id) -> update($datosProducto);

        $producto=Producto::findOrFail($id);
        return redirect('productos') -> with('mensaje' , 'La información del producto ha sido actualizada.');
    }

    /**
     * Elimina un producto en específico en la base de datos.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('productos') -> with('mensaje' , 'El producto ha sido eliminado.');
    }
}
