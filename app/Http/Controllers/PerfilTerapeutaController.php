<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\Seguridad\Usuario;
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
        return view('terapeuta.create'); //cambiar el return
    }

    public function store(Request $request)
    {
        $id = auth()->id();
        $rol = Usuario::find($id)->rol_id;

        $evento = Evento::create([
            'user_id' => $id,
            'rol_id'=>$rol,
            'formulario_id'=>1,            
        ]);
        $identificacion = $evento->identificacion()->create([
            'primerNombre' => request('primerNombre'),
            'segundoNombre' => request('segundoNombre'),
            'primerApellido' => request('primerApellido'),
            'segundoApellido' => request('segundoApellido'),
            'tipoDocumento' => request('tipoDocumento'),
            'numeroIdentificacion' => request('numeroIdentificacion'),
            'sexo' => request('sexo'),
            'fechaNacimiento' => request('fechaNacimiento'),
        ]);        

        $consultorios = $evento->consultorio()->create([            
            'nombreConsultorio'=>request('nombreConsultorio'),
            'telefonoConsultorio'=>request('telefonoConsultorio'),
            'direccionConsultorio'=>request('direccionConsultorio'),
            'correoElectronicoConsultorio'=>request('correoElectronicoConsultorio'),
            'paginaWebConsultorio'=>request('paginaWebConsultorio'),
            'codigoSecretaria'=>request('codigoSecretaria'),
        ]);
        $academicos = $evento->academico()->create([
            'tipoProfesional'=>request('tipoProfesional'),
            'numeroRegistroProfesional'=>request('numeroRegistroProfesional'),
            'tituloAcademico'=>request('tituloAcademico'),
            'institucion'=>request('institucion'),
        ]);

        $personales = $evento->personales()->create([
            'numeroTelefono'=>request('numeroTelefono'),
            'correoElectronicoPersonal'=>request('correoElectronicoPersonal'),
        ]);

        return redirect('paciente');
    }

    public function show($id)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);
        return view('paciente.show', compact('identificacion'));
    }

    public function edit($id)
    {
        $data = DatosIdentificacion::findOrFail ($id);
        return view('paciente.edit', compact('data', 'rols'));
    }
    
    public function update(Request $request, $id)
    {
        DatosIdentificacion::findOrFail($id)->update($request->all());
        return redirect('paciente') ->with('mensaje', 'Rol actualizado con exito');
    }
}
