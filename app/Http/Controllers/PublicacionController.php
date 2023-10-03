<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('publicacion-index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publicacion-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['decimal:2']
        ]);

        $publicacion = new Publicacion();
        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        $publicacion->save();

        return redirect()->route('publicacion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        return view('publicacion-show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        return view('publicacion-edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        $request -> validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['decimal:2']
        ]);

        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        $publicacion->save();

        return redirect()->route('publicacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        $publicacion->delete();

        return redirect()->route('publicacion.index');
    }
}
