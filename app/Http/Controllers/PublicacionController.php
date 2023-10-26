<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show'); //Sin only o except se aplica a todos los metodos
                                //->only();
    }

    public function index(Request $request)
    {
        $publicaciones = Publicacion::where('nombre', 'LIKE', "%{$request->buscador}%")->get();
        return view('publicaciones.publicacion-index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('publicaciones.publicacion-create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['decimal:0,2'],
            'imagen' => ['image', 'mimes:jpeg,png,svg']
        ]);

        //$request->merge(['user_id' => Auth::id])
        //$publicacion =  Publicacion::create($request->all());

        $publicacion = new Publicacion();
        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        $publicacion->user_id = Auth::id();

        if($imagen = $request->file('imagen')){
            $rutaImg = 'imagen/';
            $fileName = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaImg, $fileName);
            $publicacion['imagen'] = "$fileName";
        }

        $publicacion->save();

        $publicacion->categorias()->attach($request->categorias_id);

        return redirect()->route('publicacion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        return view('publicaciones.publicacion-show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        return view('publicaciones.publicacion-edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        $request -> validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['decimal:0,2'],
            'imagen' => ['image', 'mimes:jpeg,png,svg']
        ]);

        if($imagen = $request->file('imagen')){
            $rutaImg = 'imagen/';
            $fileName = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaImg, $fileName);
            $publicacion['imagen'] = "$fileName";
        }

        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        $publicacion->categoria = $request->categoria;
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
