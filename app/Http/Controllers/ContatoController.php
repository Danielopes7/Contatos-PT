<?php

namespace App\Http\Controllers;

use App\Models\Controle;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contato.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function show(Controle $controle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function edit(Controle $controle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Controle $controle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controle $controle)
    {
        //
    }
}
