<?php

namespace App\Http\Requests;

use App\Models\DatosIdentificacion;
use Illuminate\Foundation\Http\FormRequest;

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
            'primerNombre' => 'required',
            'segundoNombre' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'tipoDocumento' => 'required',
            'numeroIdentificacion' => 'required',
            'sexo' => 'required',    
            'fechaNacimiento' => 'required',
            'paisNacimiento' => 'required',
            'ciudadNacimiento' => 'required',
            'estadoCivil' => 'required',
            'escolaridad' => 'required',
            'ocupacion' => 'required',
            'credoReligioso' => 'required',
            'identificacion_id' => 'required', 
            'paisResidencia' => 'required',
            'departamentoResidencia' => 'required',
            'ciudadResidencia' => 'required',
            'localidadResidencia' => 'required',
            'direccionResidencia' => 'required',
            'zonaResidencia' => 'required'            
        ];
    }
    /* public function createDatos(){

        $data = $this->validate();
        $identificacion = DatosIdentificacion::create([
            'primerNombre' => $data['primerNombre'],
            'segundoNombre' => $data['segundoNombre'],
            'primerApellido' => $data['primerApellido'],
            'segundoApellido' => $data['segundoApellido'],
            'tipoDocumento' => $data['tipoDocumento'],
            'numeroIdentificacion' => $data['numeroIdentificacion'],
            'sexo' => $data['sexo'],
            'fechaNacimiento' => $data['fechaNacimiento'],
           
            ]);

        $identificacion->datosDemograficos()->create([
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
            
        ]); */
    }
}
