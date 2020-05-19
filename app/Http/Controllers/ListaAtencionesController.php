<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class ListaAtencionesController extends Controller
{
 
    public function index($id)
    {
        $data = Usuario::with('formularios')->findOrFail(auth()->id());
        $eventos = Evento::ConsultaHistoriasClinicas($id)->get();      
        $identificacion = DatosIdentificacion::findOrFail($id);         
        return view('listaAtenciones.index', compact('eventos', 'identificacion', 'data'));
    }
    
}
