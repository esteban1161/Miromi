<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class ListaAtencionesController extends Controller
{
 
    public function index($id)
    {
        $data = Usuario::with('formularios')->findOrFail(auth()->id());
        $eventos = Evento::ConsultaFormatosBase($id)->get();
        $identificacion = DatosIdentificacion::findOrFail($id);         
        return view('listaAtenciones.index', compact('eventos', 'eventos2', 'identificacion', 'data'));
    }
    
}
