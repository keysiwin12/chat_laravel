<?php

namespace App\Http\Controllers;

use App\mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['mensajitos'] = mensaje::all();
       return view('mensajes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mensajes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos = request()->except('_token');
        Mensaje::insert($datos);
        return redirect('mensajes/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function show(mensaje $mensaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensaje $mensaje)
    {
        //
    }
}
