<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInfoTerapeuta;
use App\Models\Ciudad;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\Seguridad\Usuario;
use App\Models\tituloAcademico;
use Illuminate\Http\Request;

class PerfilTerapeutaController extends Controller
{
    public function index()
    {
        $identificacion = DatosIdentificacion::orderBy('id')->get();
        //Forma anterior

        return view('terapeuta.index', compact('identificacion'));
    }

    public function create()
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $ciudades = Ciudad::orderBy('id')->pluck('nombreCiudad', 'id')->toArray();
        $localidades = Localidad::orderBy('id')->pluck('localidadResidencia', 'id')->toArray();
        $titulo = TituloAcademico::orderBy('id')->pluck('titulo', 'id')->toArray();
        return view('terapeuta.create', compact('paises', 'ciudades', 'localidades', 'titulo')); 
    }

    public function store(ValidacionInfoTerapeuta $request)
    {
        $request->crearTerapeuta();    
        
        return redirect()->route('paciente.index');
    }

    public function show($id)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);
        
        return view('paciente.show', compact('identificacion'));
    }

    public function edit($id)
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $titulo = TituloAcademico::orderBy('id')->pluck('titulo', 'id')->toArray();
        $data = Evento::findOrFail($id);
        return view('terapeuta.edit', compact('data', 'paises', 'titulo'));
    }
    
    public function update(ValidacionInfoTerapeuta $request, $id)
    {
        $request->actualizarTerapeuta($id);
        $evento = Evento::findOrFail($id); 
        if($request->hasFile('foto')){           
            $evento->identificacion()->update(['foto' => $request->file('foto')->store('public/FotosPerfil')]);
        }

        return redirect('/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }
}
