<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInfoPaciente;
use App\Models\Admin\Paciente;
use App\Models\Admin\Rol;
use App\Models\Ciudad;
use App\Models\DatosDemograficos;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\correoElectronico;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class PerfilPacienteController extends Controller
{
    public function index()
    {
        $eventos = Evento::ConsultaPacientes()->get();  
        return view('paciente.index', compact('eventos'));
    }

    public function create()
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $ciudades = Ciudad::orderBy('id')->pluck('nombreCiudad', 'id')->toArray();
        $localidades = Localidad::orderBy('id')->pluck('localidadResidencia', 'id')->toArray();
        return view('paciente.create', compact('paises', 'ciudades', 'localidades'));         
    }

    public function store(ValidacionInfoPaciente $request)
    {       
        $request->crearPaciente();
        return redirect('/paciente') ->with('mensaje', 'Paciente creado con exito'); 
    }

    public function show($id)
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $ciudades = Ciudad::orderBy('id')->pluck('nombreCiudad', 'id')->toArray();
        $localidades = Localidad::orderBy('id')->pluck('localidadResidencia', 'id')->toArray();
        $data = Evento::findOrFail ($id);
        return view('paciente.show', compact('paises', 'ciudades', 'localidades', 'data'));
    }

    public function edit($id)
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $ciudades = Ciudad::orderBy('id')->pluck('nombreCiudad', 'id')->toArray();
        $localidades = Localidad::orderBy('id')->pluck('localidadResidencia', 'id')->toArray();
        $data = Evento::findOrFail ($id);
        return view('paciente.edit', compact('data', 'paises', 'ciudades', 'localidades'));
    }

    public function update(ValidacionInfoPaciente $request, $id)
    {
        $request->actualizarPaciente($id);
        $evento = Evento::findOrFail($id);
        if($request->hasFile('foto')){           
            $foto = $evento->identificacion()->update(['foto' => $request->file('foto')->store('public/FotosPacientes')]);
        }
        return redirect('/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }   
    
    
}
