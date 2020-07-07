<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Formularios;
use Illuminate\Http\Request;

class NotasController extends Controller
{    
    public function index()
    {
        $eventos = Evento::ConsultaNotas()->get();  

        return view('notas.index', compact('eventos'));
    }

   
    public function create()
    {
        return view('notas.create');
    }

    
    public function store(Request $request)
    {
        $id = auth()->id();
        $rol = 2;   //Hacer la consulta para encontrar el rol

        $formulario = Formularios::findOrFail(7);

        $evento = $formulario->eventos()->create([
            'usuario_id' => $id,
            'rol_id'=>$rol,
        ]);     
        
        $evento->notas()->create([            
            'titulo' => $request['titulo'],
            'notas' => $request['notas'],
        ]);

        return redirect()->route('notas.index') ->with('mensaje', 'Nota creada con exito'); 

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Evento::findOrFail ($id);
        return view('notas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id); 

        $evento->notas()->update([
            'titulo' => $request['titulo'],
            'notas' => $request['notas'],
        ]);

        return redirect()->route('notas.index') ->with('mensaje', 'Nota Actualizado con Exito');
    }

    public function destroy($id)
    {
        //
    }
}
