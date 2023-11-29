<?php

namespace App\Http\Controllers;

use App\Mail\Order;
use App\Models\Compra;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CompraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); //Sin only o except se aplica a todos los metodos
                                //->only();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::with('user')->get();
        return view('compras.compra-index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publicacions = Publicacion::all();
        return view('compras.compra-create', compact('publicacions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'productos_id' => ['required'],
        ]);


        $total = 0;
        foreach ($request->productos_id as $producto_id) {
            $total += Publicacion::where('id', $producto_id)->get()->sum('precio');
        }

        $request->merge(['user_id' => Auth::id(), 'total' => $total]);

        $compra = Compra::create($request->all());

        $compra->publicaciones()->attach($request->productos_id);

        Mail::to($request->user())->send(new Order($compra));

        return redirect()->route('compra.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compra $compra)
    {
        $this->authorize('creador_admin', $compra);
        return view('compras.compra-show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compra $compra)
    {
        $this->authorize('creador_admin', $compra);
        $compra->delete();

        return redirect()->route('compra.index');
    }
}
