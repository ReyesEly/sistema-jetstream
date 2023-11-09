<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('can: Crear Cliente')->only('create');
        $this->middleware('can: Eliminar Cliente')->only('destroy');
    }
    public function index()
    {
        //
        $clientes = Client::all();
        return view('sistema.listCliente',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sistema.add_Cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'dni' => 'required|numeric|unique:clients,dni|regex:/^\d{13}$/',
            'apellido' => 'required|string|max:50',
            'nombre' =>'required|string|max:50',
            'email' => 'required|string|unique:clients,email|max:50',
            'telefono' => 'required|string|numeric|min:10'
        ]);

        $cliente = new Client();

        $cliente->dni = $request->input('dni');
        $cliente->apellido = $request->input('apellido');
        $cliente->nombre = $request->input('nombre');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->estado = $request ->input('estado');

        $cliente->save();

        return back()->with('message','Registro creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = Client::find($id);

        return view('sistema.edit_Cliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente = Client::find($id);

        $cliente->dni = $request->input('dni');
        $cliente->apellido = $request->input('apellido');
        $cliente->nombre = $request->input('nombre');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->estado = $request ->input('estado');

        $cliente->save();

        return back()->with('message','Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = Client::find($id);
        $cliente ->delete();
        return back();
    }
}
