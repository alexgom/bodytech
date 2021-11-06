<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrito = Carrito::all();
        return $carrito;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $carrito = Carrito::create($request->all());
         return $carrito;
    }

    public function getCarrito($id){
        $carrito = Carrito::find($id);
        return $carrito; 

    }

     public function getCarritoCliente($cliente_cedula){
        $carrito = Carrito::where('cliente_identificacion','=',$cliente_cedula)->get();
        return $carrito; 

    }

    public function updateEstado(Request $request, $cliente_cedula){
         $carrito = Carrito::where('cliente_identificacion','=',$cliente_cedula)->update(['estado'=> $request->estado]);
        return response()->json([
            'res' => true,
            'message' => 'estado actualizado'
        ],200);
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $carrito = $this->getCarrito($id);
        $carrito->delete();   
        return $carrito;  
    }
}
