<?php

namespace App\Http\Controllers;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use App\Models\Formularios;
use App\Models\Localidad;
use App\Models\Pais;
use Illuminate\Http\Request;

class PerfilAuxiliarController extends Controller
{
    public function index()
    {        
        $terapeutas = Evento::ConsultaTerapeutas()->get();
        return view('auxiliar.index', compact('terapeutas'));
    }

    public function create()
    {
        $terapeutas = Evento::ConsultaTerapeutas()->get();
        
        $paises = Pais::orderBy('id')->get();
        $localidades = Localidad::orderBy('id')->pluck('localidadResidencia', 'id')->toArray();
        $data = [0];
        return view('auxiliar.create', compact('paises', 'localidades', 'data', 'terapeutas'));
    }

    public function store(Request $request)
    {
        $id = $request->input('terapeuta');
        $rol = 2;   //Hacer la consulta para encontrar el rol
        $id2 = auth()->id();

        $formulario = Formularios::findOrFail(2);

        $evento = $formulario->eventos()->create([
            'usuario_id' => $id,
            'rol_id' => $rol,
            'usuario_r_id' => $id2,
        ]);                  
        
        $foto = $request->file('foto');
        $evento->identificacion()->create([
            'foto' => $foto->store('public/FotosPerfil'),
            'primerNombre' => $request['primerNombre'],
            'segundoNombre' => $request['segundoNombre'],
            'primerApellido' => $request['primerApellido'],
            'segundoApellido' => $request['segundoApellido'],
            'tipoDocumento' => $request['tipoDocumento'],
            'numeroIdentificacion' => $request['numeroIdentificacion'],
            'sexo' => $request['sexo'],
            'fechaNacimiento' => $request['fechaNacimiento'],                        
        ]);      

        if($foto = DatosIdentificacion::setFotoPerfil($request->foto)){
            $request->request->add(['foto' => $foto]);
        }  
    
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
            
        return redirect()->route('auxiliar.index') ->with('mensaje', 'Paciente creado con exito');
    }

    public function show(Request $request)
    {
        $id = $request->input('terapeuta');
        $eventos = Evento::AuxiliarPaciente($id)->get();
        return view('auxiliar.show', compact('eventos'));
    }

    public function edit($id)
    {
        //
    }
   
    public function update(Request $request, $id)
    {
        //
    }
    public function selectPaciente($id){
        return Evento::AuxiliarPaciente($id);
    }

}
