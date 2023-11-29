<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacion;
use App\Models\Temporada;
use App\Models\User;
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
        $this->authorize('admin');
        $temporadas = Temporada::all();
        return view('publicaciones.publicacion-create', compact('temporadas'));
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
        
        $request->merge(['user_id' => Auth::id()]);

        if($request->file('imagen')){
            if($request->file('imagen')->isValid()){
                $request->merge(['archivo_nombre' => $request->file('imagen')->getClientOriginalName(),
                'archivo_ubicacion' => $request->file('imagen')->store('public/img')
                            ]);
            }
        }
            
        $publicacion =  Publicacion::create($request->all());

        /*$publicacion = new Publicacion();
        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        $publicacion->user_id = Auth::id();

        if($imagen = $request->file('imagen')){
            $rutaImg = 'imagen/';
            $fileName = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaImg, $fileName);
            $publicacion['imagen'] = "$fileName";
        }*/

        //$publicacion->save();

        $publicacion->temporadas()->attach($request->temporadas_id);

        return redirect()->route('publicacion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        $comentarios = Comentario::with(['publicacion', 'user'])->get();
        return view('publicaciones.publicacion-show', compact('publicacion', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        $this->authorize('admin');
        $temporadas = Temporada::all();
        return view('publicaciones.publicacion-edit', compact('publicacion', 'temporadas'));
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
        
        /* if($imagen = $request->file('imagen')){
            $rutaImg = 'imagen/';
            $fileName = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaImg, $fileName);
            $publicacion['imagen'] = "$fileName";
        }*/
        
        $publicacion->nombre = $request->nombre;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio = $request->precio;
        if($request->file('imagen')){
            if($request->file('imagen')->isValid()){
                $request->merge(['archivo_nombre' => $request->file('imagen')->getClientOriginalName(),
                'archivo_ubicacion' => $request->file('imagen')->store('public/img')
                            ]);
            }
            $publicacion->archivo_ubicacion = $request->archivo_ubicacion;
            $publicacion->archivo_nombre = $request->archivo_nombre;
        }

        $publicacion->temporadas()->attach($request->temporadas_id);

        $publicacion->save();

        return redirect()->route('publicacion.show', $publicacion->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        $this->authorize('admin');
        $publicacion->delete();

        return redirect()->route('publicacion.index');
    }

    public function makeAdmin(User $user){
        $user->name = $user->name;
        $user->email = $user->email;
        $user->admin = true;
        $user->save();

        return redirect()->route('dashboard');
    }
}
