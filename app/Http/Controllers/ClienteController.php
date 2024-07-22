<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all();
        // return $product;

        return view('cliente.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes =new Cliente;
        $clientes->nombre = $request->input('nombre');
        $clientes->telefono = $request->input('telefono');
        $clientes->correo = $request->input('correo');
        $clientes->save();
        return redirect()->back()->with('success', 'Cliente creado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes = Cliente::find($id);
        return view('cliente.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = Cliente::find($id);
        return view('cliente.edit',compact('clientes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes= Cliente::find($id);
        $clientes->nombre = $request->input('nombre');
        $clientes->telefono = $request->input('telefono');
        $clientes->correo = $request->input('correo');

        return redirect()->back()->with('success', 'Cliente editado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes=Cliente::find($id);
        $clientes->delete();
       return 'Cliente Eliminado ';

    }
}
