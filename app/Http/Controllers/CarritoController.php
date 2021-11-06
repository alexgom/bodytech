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
