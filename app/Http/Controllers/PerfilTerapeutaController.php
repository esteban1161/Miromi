<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInfoTerapeuta;
use App\Models\Ciudad;
use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\Seguridad\Usuario;
use App\Models\TituloAcademico;
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
        $data = [0];
        return view('terapeuta.create', compact('data', 'paises', 'ciudades', 'localidades', 'titulo')); 
    }

    public function store(Request $request)
    {
            $id = auth()->id();
            $rol = 2;

            $formulario = Formularios::findOrFail(1);


            $evento = $formulario->eventos()->create([
                'usuario_id' => $id,
                'rol_id'=>$rol,        
            ]);
            
            if($foto = DatosIdentificacion::setFotoPerfil($request->foto)){
                $request->request->add(['foto' => $foto]);
            }  

            $evento->identificacion()->create([       
                'foto' => $foto,
                'primerNombre' =>$request['primerNombre'],
                'segundoNombre' =>$request['segundoNombre'],
                'primerApellido' =>$request['primerApellido'],
                'segundoApellido' =>$request['segundoApellido'],
                'tipoDocumento' =>$request['tipoDocumento'],
                'numeroIdentificacion' =>$request['numeroIdentificacion'],
                'sexo' =>$request['sexo'],
                'fechaNacimiento' =>$request['fechaNacimiento'],
            ]);        
            
            $consultorios = $request->input('nombreConsultorio');
            $consultorios2 = $request->input('direccionConsultorio');
            $consultorios3 = $request->input('paginaWebConsultorio');
            $consultorios4 = $request->input('codigoSecretaria');
            $consultorios5 = $request->input('nitConsultorio');
            $evento->consultorios()->delete();
            for($i = 0; $i < count($consultorios); $i++){
                $evento->consultorios()->create([            
                    'nombreConsultorio' => $consultorios[$i],               
                    'direccionConsultorio' => $consultorios2[$i],
                    'paginaWebConsultorio' => $consultorios3[$i],
                    'codigoSecretaria' => $consultorios4[$i],
                    'nitConsultorio' => $consultorios5[$i]
                ]);    
            }   

            $academicos = $request->input('numeroRegistroProfesional');
            $academicos2 = $request->input('tituloAcademico');
            $academicos3 = $request->input('institucion');
            for($i = 0; $i < count($academicos); $i++){
                $evento->academicos()->create([
                    'numeroRegistroProfesional' =>$academicos[$i],
                    'tituloAcademico' =>$academicos2[$i],
                    'institucion' =>$academicos3[$i],
                ]);
            }

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

            if($request->file('foto')){
                $evento->identificacion()->update(['foto' => $request->file('foto')->store('public/FotosPacientes')]);
            }
        
        return redirect()->route('paciente.index')->with('mensaje', 'Perfil Terapeuta creado con exito');
    }

    public function edit($id)
    {
        $paises = Pais::orderBy('id')->pluck('nombrePais', 'id')->toArray();
        $titulo = TituloAcademico::orderBy('id')->pluck('titulo', 'id')->toArray();
        $data = Evento::findOrFail($id);  
        $identificacion = $data->identificacion;      
        return view('terapeuta.edit', compact('data', 'paises', 'titulo', 'identificacion'));
    }
    
    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);     
        
        $foto = $request->file('foto');
        $evento->identificacion()->update([
            'foto' => $foto->store('public/FotosPerfil'),
            'primerNombre' =>$request['primerNombre'],
            'segundoNombre' =>$request['segundoNombre'],
            'primerApellido' =>$request['primerApellido'],
            'segundoApellido' =>$request['segundoApellido'],
            'tipoDocumento' =>$request['tipoDocumento'],
            'numeroIdentificacion' =>$request['numeroIdentificacion'],
            'sexo' =>$request['sexo'],
            'fechaNacimiento' =>$request['fechaNacimiento'],
        ]);    
        
        if($foto = DatosIdentificacion::setFotoPerfil($request->foto,  $evento->identificacion->foto)){
            $request->request->add(['foto' => $foto]);
        }  

        $consultorios = $request->input('nombreConsultorio');
        $consultorios2 = $request->input('direccionConsultorio');
        $consultorios3 = $request->input('paginaWebConsultorio');
        $consultorios4 = $request->input('codigoSecretaria');
        $consultorios5 = $request->input('nitConsultorio');
        $evento->consultorios()->delete();
        for($i = 0; $i < count($consultorios); $i++){
            $evento->consultorios()->create([            
                'nombreConsultorio' => $consultorios[$i],               
                'direccionConsultorio' => $consultorios2[$i],
                'paginaWebConsultorio' => $consultorios3[$i],
                'codigoSecretaria' => $consultorios4[$i],
                'nitConsultorio' => $consultorios5[$i]
            ]);    
        }
        
        $academicos = $request->input('numeroRegistroProfesional');
        $academicos2 = $request->input('tituloAcademico');
        $academicos3 = $request->input('institucion');
        $evento->academicos()->delete();
        for($i = 0; $i < count($academicos); $i++){
            $evento->academicos()->create([
                'numeroRegistroProfesional' =>$academicos[$i],
                'tituloAcademico' =>$academicos2[$i],
                'institucion' =>$academicos3[$i],
            ]);
        }
        
        $telefonos = $request->input('tipoTelefono');
        $telefonos2 = $request->input('numeroTelefono');
        $evento->telefonos()->delete();
        for($i = 0; $i < count($telefonos); $i ++){            
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

        return redirect('/paciente')->with('mensaje', 'Perfil Terapeuta actualizado con exito');
    }
}
