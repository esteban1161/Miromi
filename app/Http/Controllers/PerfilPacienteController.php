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

    public function store( )
    {       
        $id = auth()->id();
        $rol = 2;   //Hacer la consulta para encontrar el rol

        $evento = Evento::create([
            'usuario_id' => $id,
            'rol_id'=>$rol,
            'formulario_id'=>2,
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
        $demograficos = $evento->demografico()->create([
            'paisNacimiento'=>request('paisNacimiento'),
            'ciudadNacimiento'=>request('ciudadNacimiento'),
            'estadoCivil'=>request('estadoCivil'),
            'escolaridad'=>request('escolaridad'),
            'ocupacion'=>request('ocupacion'),
            'credoReligioso'=>request('credoReligioso'),
            'paisResidencia'=>request('paisResidencia'),
            'departamentoResidencia'=>request('departamentoResidencia'),
            'ciudadResidencia'=>request('ciudadResidencia'),
            'localidadResidencia'=>request('localidadResidencia'),
            'direccionResidencia'=>request('direccionResidencia'),
            'zonaResidencia'=>request('zonaResidencia'),
        ]);

        $afiliacion = $evento->afiliacion()->create([
            'tipoVinculacion'=>request('tipoVinculacion'),
            'aseguradora'=>request('aseguradora'),
            'responsableMedico'=>request('responsableMedico'),
            'parentescoResponsable'=>request('parentescoResponsable'),
            'telefonoResponsable'=>request('telefonoResponsable'),
        ]);

        $telefono1 = $evento->telefonos()->create([
            'numeroTelefono'=>request('numeroTelefono'),
            'tipoTelefono'=>request('tipoTelefono'),
        ]);

        $telefono2 = $evento->telefonos()->create([
            'numeroTelefono'=>request('numeroTelefono'),
            'tipoTelefono'=>request('tipoTelefono'),
        ]);

        $correo = $evento->correosElectronicos()->create([
            'correoElectronico'=>request('correoElectronico'),
            'tipoCorreo'=>request('tipoCorreo'),
        ]);

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

        $demograficos = $evento->demografico()->update([
            'paisNacimiento'=>request('paisNacimiento'),
            'ciudadNacimiento'=>request('ciudadNacimiento'),
            'estadoCivil'=>request('estadoCivil'),
            'escolaridad'=>request('escolaridad'),
            'ocupacion'=>request('ocupacion'),
            'credoReligioso'=>request('credoReligioso'),
            'paisResidencia'=>request('paisResidencia'),
            'departamentoResidencia'=>request('departamentoResidencia'),
            'ciudadResidencia'=>request('ciudadResidencia'),
            'localidadResidencia'=>request('localidadResidencia'),
            'direccionResidencia'=>request('direccionResidencia'),
            'zonaResidencia'=>request('zonaResidencia'),
        ]);

        $afiliacion = $evento->afiliacion()->update([
            'tipoVinculacion'=>request('tipoVinculacion'),
            'aseguradora'=>request('aseguradora'),
            'responsableMedico'=>request('responsableMedico'),
            'parentescoResponsable'=>request('parentescoResponsable'),
            'telefonoResponsable'=>request('telefonoResponsable'),
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
