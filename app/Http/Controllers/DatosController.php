<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Traer todos los datos y asignarlos a la variable
        // En lugar de devolver una vista, devolvemos la variable
        $datos = Datos::all();

        return response()->json([
            'result' => true,
            'datos' => $datos
        ]);

        // return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Datos();
        $datos->titulo = $request->titulo;
        $datos->subtitulo = $request->subtitulo;
        $datos->descripcion = $request->descripcion;

        $datos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Datos $datos)
    {
        return response()->json([
            'result' => true,
            'datos' => $datos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Request $request)
    {
        $datos = Datos::findOrFail($request->id);
        $datos->titulo = $request->titulo;
        $datos->subtitulo = $request->subtitulo;
        $datos->descripcion = $request->descripcion;

        $datos->save();

        return $datos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    public function destroy(Request $request)
    {
        $datos = Datos::destroy($request->id);
        return $datos;
    }
}
