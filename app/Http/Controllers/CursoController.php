<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        #Curso::where('nombre', 'like', 'Prueba')->get('col1');
        return view('curso-index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curso-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => ['required'],
            'informacion' => ['required', 'min:20']
        ]);

        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->informacion = $request->informacion;
        $curso->save();

        return redirect('/curso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        return view('curso-show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view('curso-edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $request -> validate([
            'nombre' => ['required'],
            'informacion' => ['required', 'min:20']
        ]);

        $curso->nombre = $request->nombre;
        $curso->informacion = $request->informacion;
        $curso->save();

        return redirect('/curso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        
        return redirect('/curso');
    }
}
