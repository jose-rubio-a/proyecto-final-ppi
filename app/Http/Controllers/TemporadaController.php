<?php

namespace App\Http\Controllers;

use App\Models\Temporada;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show'); //Sin only o except se aplica a todos los metodos
                                //->only();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temporadas = Temporada::all();
        return view('temporadas.temporada-index', compact('temporadas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temporadas.temporada-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => ['required'],
            'imagen' => ['image', 'mimes:jpeg,png,svg']
        ]);

        if($request->file('imagen')){
            if($request->file('imagen')->isValid()){
                $request->merge(['archivo_nombre' => $request->file('imagen')->getClientOriginalName(),
                'archivo_ubicacion' => $request->file('imagen')->store('public/img')
                            ]);
            }
        }

        $temporada =  Temporada::create($request->all());

        return redirect()->route('temporada.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Temporada $temporada)
    {
        return view('temporadas.temporada-show', compact('temporada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Temporada $temporada)
    {
        return view('temporadas.temporada-edit', compact('temporada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Temporada $temporada)
    {
        $request -> validate([
            'nombre' => ['required'],
            'imagen' => ['image', 'mimes:jpeg,png,svg']
        ]);

        $temporada->nombre = $request->nombre;
        if($request->file('imagen')){
            if($request->file('imagen')->isValid()){
                $request->merge(['archivo_nombre' => $request->file('imagen')->getClientOriginalName(),
                'archivo_ubicacion' => $request->file('imagen')->store('public/img')
                            ]);
            }
            $temporada->archivo_ubicacion = $request->archivo_ubicacion;
            $temporada->archivo_nombre = $request->archivo_nombre;
        }

        $temporada->save();

        return redirect()->route('temporada.show', $temporada->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Temporada $temporada)
    {
        $temporada->delete();

        return redirect()->route('temporada.index');
    }
}
