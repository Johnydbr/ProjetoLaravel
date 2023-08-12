<?php

namespace App\Http\Controllers;

use App\Models\tbcliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TbclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $envio = tbcliente::create([
            
            'nomeContato' => $request -> nome,
            'emailContato' => $request -> email,
            'numeroContato' => $request -> numero,
            'escolhaContato' => $request -> seletor,
            'comentarioContato' => $request -> comentario

         ]);

         return view ('formulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(tbcliente $tbcliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tbcliente $tbcliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tbcliente $tbcliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbcliente $tbcliente)
    {
        //
    }
}
