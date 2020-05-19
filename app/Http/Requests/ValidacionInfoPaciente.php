<?php

namespace App\Http\Requests;

use App\Models\DatosIdentificacion;
use App\Models\Evento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ValidacionInfoPaciente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [   
            'primerNombre' => 'nullable',
            'segundoNombre' => 'nullable',
            'primerApellido' => 'nullable',
            'segundoApellido' => 'nullable',
            'tipoDocumento' => 'nullable',
            'numeroIdentificacion' => 'nullable',
            'sexo' => 'nullable',
            'fechaNacimiento' => 'nullable',       
            
            'paisNacimiento' => 'nullable',
            'ciudadNacimiento' => 'nullable',
            'estadoCivil' => 'nullable',
            'escolaridad' => 'nullable',
            'ocupacion' => 'nullable',
            'credoReligioso' => 'nullable',
            'paisResidencia' => 'nullable',
            'departamentoResidencia' => 'nullable',
            'ciudadResidencia' => 'nullable',
            'localidadResidencia' => 'nullable',
            'direccionResidencia' => 'nullable',
            'zonaResidencia' => 'nullable',

            'tipoVinculacion' => 'nullable',
            'aseguradora' => 'nullable',
            'responsableMedico' => 'nullable',
            'parentescoResponsable' => 'nullable',
            'telefonoResponsable' => 'nullable',

            'numeroTelefono' => 'nullable',
            'tipoTelefono' => 'nullable',

            'correoElectronico' => 'nullable',
            'tipoCorreo' => 'nullable',
        ];
    }
   /*  public function crearPaciente(){

        DB::transaction(function () 
        {
            $data = $this->validated();
            $id = auth()->id();
            $rol = 2;   //Hacer la consulta para encontrar el rol

            $evento = Evento::create([
                'usuario_id' => $id,
                'rol_id'=>$rol,
                'formulario_id'=>2,
            ]);           
            $identificacion = $evento->identificacion()->create([
                'primerNombre' => $data['primerNombre'],
                'segundoNombre' => $data['segundoNombre'],
                'primerApellido' => $data['primerApellido'],
                'segundoApellido' => $data['segundoApellido'],
                'tipoDocumento' => $data['tipoDocumento'],
                'numeroIdentificacion' => $data['numeroIdentificacion'],
                'sexo' => $data['sexo'],
                'fechaNacimiento' => $data['fechaNacimiento'],           
            ]);
        
            $evento->demografico()->create([
                'paisNacimiento'=>$data['paisNacimiento'],
                'ciudadNacimiento'=>$data['ciudadNacimiento'],
                'estadoCivil'=>$data['estadoCivil'],
                'escolaridad'=>$data['escolaridad'],
                'ocupacion'=>$data['ocupacion'],
                'credoReligioso'=>$data['credoReligioso'],
                'paisResidencia'=>$data['paisResidencia'],
                'departamentoResidencia'=>$data['departamentoResidencia'],
                'ciudadResidencia'=>$data['ciudadResidencia'],
                'localidadResidencia'=>$data['localidadResidencia'],
                'direccionResidencia'=>$data['direccionResidencia'],
                'zonaResidencia'=>$data['zonaResidencia'],
            ]);

            $evento->afiliacion()->create([
                'tipoVinculacion'=>$data['tipoVinculacion'],
                'aseguradora'=>$data['aseguradora'],
                'responsableMedico'=>$data['responsableMedico'],
                'parentescoResponsable'=>$data['parentescoResponsable'],
                'telefonoResponsable'=>$data['telefonoResponsable'],
            ]);

            $evento->correosElectronicos()->create([
                'correoElectronico'=>$data['correoElectronico'],
                'tipoCorreo'=>$data['tipoCorreo'],
            ]);

            if($data->file('foto')){
                $path = Storage::disk('public')->put('FotosPacientes', $data->file('foto'));
                $identificacion = fill(['foto' => asset($path)])->save();
            }
        });
    } */

    public function actualizarPaciente($identificacion)
    {
        /* $data = $this ->validated();
        $evento = Evento::findOrFail($identificacion);        
        $evento->identificacion()->update([
            'primerNombre' => $data['primerNombre'],  
            'segundoNombre' => $data['segundoNombre'],
            'primerApellido' => $data['primerApellido'],
            'segundoApellido' => $data['segundoApellido'],
            'tipoDocumento' => $data['tipoDocumento'],
            'numeroIdentificacion' => $data['numeroIdentificacion'],
            'sexo' => $data['sexo'],
            'fechaNacimiento' => $data['fechaNacimiento'],          
        ]);        

        $evento->demografico()->update([
            'paisNacimiento' => $data['paisNacimiento'],
            'ciudadNacimiento' => $data['ciudadNacimiento'],
            'estadoCivil' => $data['estadoCivil'],
            'escolaridad' => $data['escolaridad'],
            'ocupacion' => $data['ocupacion'],
            'credoReligioso' => $data['credoReligioso'],
            'paisResidencia' => $data['paisResidencia'],
            'departamentoResidencia' => $data['departamentoResidencia'],
            'ciudadResidencia' => $data['ciudadResidencia'],
            'localidadResidencia' => $data['localidadResidencia'],
            'direccionResidencia' => $data['direccionResidencia'],
            'zonaResidencia' => $data['zonaResidencia'],
        ]);

        $evento->afiliacion()->update([
            'tipoVinculacion' => $data['tipoVinculacion'],
            'aseguradora' => $data['aseguradora'],
            'responsableMedico' => $data['responsableMedico'],
            'parentescoResponsable' => $data['parentescoResponsable'],
            'telefonoResponsable' => $data['telefonoResponsable'],
        ]);

        $telefonos = $data->input('tipoTelefono');
        $telefonos2 = $data->input('numeroTelefono');
        for($i = 0; $i < count($telefonos); $i ++) {
            $evento->telefonos()->create([
                'tipoTelefono' => $telefonos[$i],
                'numeroTelefono' => $telefonos2[$i],                
            ]);  
        }         
        $correos = $data->input('tipoCorreo');
        $correos2 = $data->input('correoElectronico');
        for($i = 0; $i < count($telefonos); $i ++) {            
            $evento->correosElectronicos()->create([
                'tipoCorreo'=>$correos[$i],
                'correoElectronico'=>$correos2[$i],
            ]);
        }
        dd($telefonos); */
    }
}
