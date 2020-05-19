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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $data = [0];
        return view('paciente.create', compact('data', 'paises', 'ciudades', 'localidades'));         
    }

    public function store(Request $request)
    {        
            $id = auth()->id();
            $rol = 2;   //Hacer la consulta para encontrar el rol

            $evento = Evento::create([
                'usuario_id' => $id,
                'rol_id'=>$rol,
                'formulario_id'=>2,
            ]);                  
            
            if($foto = DatosIdentificacion::setFotoPerfil($request->foto)){
                $request->request->add(['foto' => $foto]);
            }  

            $identificacion = $evento->identificacion()->create([
                'foto' => $foto,
                'primerNombre' => $request['primerNombre'],
                'segundoNombre' => $request['segundoNombre'],
                'primerApellido' => $request['primerApellido'],
                'segundoApellido' => $request['segundoApellido'],
                'tipoDocumento' => $request['tipoDocumento'],
                'numeroIdentificacion' => $request['numeroIdentificacion'],
                'sexo' => $request['sexo'],
                'fechaNacimiento' => $request['fechaNacimiento'],  
                         
            ]);
             
        
            $evento->demografico()->create([
                'paisNacimiento'=>$request['paisNacimiento'],
                'ciudadNacimiento'=>$request['ciudadNacimiento'],
                'estadoCivil'=>$request['estadoCivil'],
                'escolaridad'=>$request['escolaridad'],
                'ocupacion'=>$request['ocupacion'],
                'credoReligioso'=>$request['credoReligioso'],
                'paisResidencia'=>$request['paisResidencia'],
                'departamentoResidencia'=>$request['departamentoResidencia'],
                'ciudadResidencia'=>$request['ciudadResidencia'],
                'localidadResidencia'=>$request['localidadResidencia'],
                'direccionResidencia'=>$request['direccionResidencia'],
                'zonaResidencia'=>$request['zonaResidencia'],
            ]);

            $evento->afiliacion()->create([
                'tipoVinculacion'=>$request['tipoVinculacion'],
                'aseguradora'=>$request['aseguradora'],
                'responsableMedico'=>$request['responsableMedico'],
                'parentescoResponsable'=>$request['parentescoResponsable'],
                'telefonoResponsable'=>$request['telefonoResponsable'],
            ]);

            $telefonos = $request->input('tipoTelefono');
            $telefonos2 = $request->input('numeroTelefono');
            for($i = 0; $i < count($telefonos); $i ++) {
                $evento->telefonos()->create([
                    'tipoTelefono' => $telefonos[$i],
                    'numeroTelefono' => $telefonos2[$i],                
                ]);  
            }  

            $correos = $request->input('tipoCorreo');
            $correos2 = $request->input('correoElectronico');
            for($i = 0; $i < count($correos); $i ++) {            
                $evento->correosElectronicos()->create([
                    'tipoCorreo'=>$correos[$i],
                    'correoElectronico'=>$correos2[$i],
                ]);
            }
            
            
        return redirect()->route('paciente.index') ->with('mensaje', 'Paciente creado con exito'); 
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
        $identificacion = $data->identificacion;
       
        return view('paciente.edit', compact('data', 'paises', 'ciudades', 'localidades', 'identificacion'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);        

        if($foto = DatosIdentificacion::setFotoPerfil($request->foto, $evento->identificacion->foto)){
            $request->request->add(['foto' => $foto]);
        } 

        $evento->identificacion()->update([
            'foto' => $foto,
            'primerNombre' => $request['primerNombre'],
            'segundoNombre' => $request['segundoNombre'],
            'primerApellido' => $request['primerApellido'],
            'segundoApellido' => $request['segundoApellido'],
            'tipoDocumento' => $request['tipoDocumento'],
            'numeroIdentificacion' => $request['numeroIdentificacion'],
            'sexo' => $request['sexo'],
            'fechaNacimiento' => $request['fechaNacimiento'],           
        ]);
    
        $evento->demografico()->update([
            'paisNacimiento'=>$request['paisNacimiento'],
            'ciudadNacimiento'=>$request['ciudadNacimiento'],
            'estadoCivil'=>$request['estadoCivil'],
            'escolaridad'=>$request['escolaridad'],
            'ocupacion'=>$request['ocupacion'],
            'credoReligioso'=>$request['credoReligioso'],
            'paisResidencia'=>$request['paisResidencia'],
            'departamentoResidencia'=>$request['departamentoResidencia'],
            'ciudadResidencia'=>$request['ciudadResidencia'],
            'localidadResidencia'=>$request['localidadResidencia'],
            'direccionResidencia'=>$request['direccionResidencia'],
            'zonaResidencia'=>$request['zonaResidencia'],
        ]);

        $evento->afiliacion()->update([
            'tipoVinculacion'=>$request['tipoVinculacion'],
            'aseguradora'=>$request['aseguradora'],
            'responsableMedico'=>$request['responsableMedico'],
            'parentescoResponsable'=>$request['parentescoResponsable'],
            'telefonoResponsable'=>$request['telefonoResponsable'],
        ]);

        $telefonos = $request->input('tipoTelefono');
        $telefonos2 = $request->input('numeroTelefono');
        $evento->telefonos()->delete();
        for($i = 0; $i < count($telefonos); $i ++) {
            $evento->telefonos()->create([
                'tipoTelefono' => $telefonos[$i],
                'numeroTelefono' => $telefonos2[$i],                
            ]);  
        }  

        $correos = $request->input('tipoCorreo');
        $correos2 = $request->input('correoElectronico');
        $evento->correosElectronicos()->delete();
        for($i = 0; $i < count($correos); $i ++) {            
            $evento->correosElectronicos()->create([
                'tipoCorreo'=>$correos[$i],
                'correoElectronico'=>$correos2[$i],
            ]);
        }

        if($request->hasFile('foto')){           
            $evento->identificacion()->update(['foto' => $request->file('foto')->store('public/FotosPacientes')]);
        }

        return redirect('/paciente') ->with('mensaje', 'Paciente Actualizado con Exito');
    }   
    
    
}
