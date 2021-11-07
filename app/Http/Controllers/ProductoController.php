<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $productos = Productos::create($request->all());
         return $productos;
    }


    public function getProducto($id){
        $productos = Productos::find($id);
        return $productos; 

    }

    public function importCSV(Request $request){
        $file = $request->file('file');
        Excel::import(new ProductoImport, $file);

           return response()->json([
            'res' => true,
            'message' => 'Datos importados'    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = $this->getProducto($id);
        $productos->fill($request->all())->save();
        return $productos;
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = $this->getProducto($id);
        $productos->delete();
        return $productos;  
    }
}
