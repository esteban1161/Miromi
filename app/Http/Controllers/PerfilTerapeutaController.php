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
        return view('terapeuta.create'); 
    }

    public function store(Request $request)
    {
        $id = auth()->id();
        $rol = 2;

        $evento = Evento::create([
            'usuario_id' => $id,
            'rol_id'=>$rol,
            'formulario_id'=>1,            
        ]);
        $identificacion = $evento->identificacion()([
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
            'numeroRegistroProfesional'=>request('numeroRegistroProfesional'),
            'tituloAcademico'=>request('tituloAcademico'),
            'institucion'=>request('institucion'),
        ]);

        $telefono1 = $evento->telefonos()->create([
            'numeroTelefono'=>request('numeroTelefono'),
            'tipoTelefono'=>request('tipoTelefono'),
        ]);

        $correo = $evento->correosElectronicos()->create([
            'correoElectronico'=>request('correoElectronico'),
            'tipoCorreo'=>request('tipoCorreo'),
        ]);

        return redirect('/paciente');
    }

    public function show($id)
    {
        $identificacion = DatosIdentificacion::findOrFail($id);
        return view('paciente.show', compact('identificacion'));
    }

    public function edit($id)
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $data = Evento::findOrFail($id);
        return view('terapeuta.edit', compact('data', 'paises'));
    }
    
    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id); 
        $identificacion = $evento->identificacion()->update([
            'primerNombre' => request('primerNombre'),
            'segundoNombre' => request('segundoNombre'),
            'primerApellido' => request('primerApellido'),
            'segundoApellido' => request('segundoApellido'),
            'tipoDocumento' => request('tipoDocumento'),
            'numeroIdentificacion' => request('numeroIdentificacion'),
            'sexo' => request('sexo'),
            'fechaNacimiento' => request('fechaNacimiento'),
        ]);        

        $consultorios = $evento->consultorio()->update([            
            'nombreConsultorio'=>request('nombreConsultorio'),
            'telefonoConsultorio'=>request('telefonoConsultorio'),
            'direccionConsultorio'=>request('direccionConsultorio'),
            'correoElectronicoConsultorio'=>request('correoElectronicoConsultorio'),
            'paginaWebConsultorio'=>request('paginaWebConsultorio'),
            'codigoSecretaria'=>request('codigoSecretaria'),
        ]);
        $academicos = $evento->academico()->update([
            'numeroRegistroProfesional'=>request('numeroRegistroProfesional'),
            'tituloAcademico'=>request('tituloAcademico'),
            'institucion'=>request('institucion'),
        ]);

        $telefono1 = $evento->telefonos()->update([
            'numeroTelefono'=>request('numeroTelefono'),
            'tipoTelefono'=>request('tipoTelefono'),
        ]);

        $correo = $evento->correosElectronicos()->update([
            'correoElectronico'=>request('correoElectronico'),
            'tipoCorreo'=>request('tipoCorreo'),
        ]);

        return redirect('/paciente') ->with('mensaje', 'Rol actualizado con exito');
    }
}
