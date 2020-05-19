<?php

namespace App\Http\Requests;

use App\Models\Evento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class ValidacionInfoTerapeuta extends FormRequest
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
            'foto' => 'nullable | image',

            'nombreConsultorio' => 'nullable',           
            'direccionConsultorio' => 'nullable',

            'numeroRegistroProfesional' => 'nullable',
            'tituloAcademico' => 'nullable',
            'institucion' => 'nullable',

            'numeroTelefono' => 'nullable',
            'tipoTelefono' => 'nullable',

            'correoElectronico' => 'nullable',
            'tipoCorreo' => 'nullable',
        ];
    }

    /* public function crearTerapeuta()
    {   
        DB::transaction(function () 
        {                   
            $data = $this->validated();
            $id = auth()->id();
            $rol = 2;

            $evento = Evento::create([
                'usuario_id' => $id,
                'rol_id'=>$rol,
                'formulario_id'=>1,            
            ]);
            
            $evento->identificacion()->create([       
                
                'primerNombre' =>$data['primerNombre'],
                'segundoNombre' =>$data['segundoNombre'],
                'primerApellido' =>$data['primerApellido'],
                'segundoApellido' =>$data['segundoApellido'],
                'tipoDocumento' =>$data['tipoDocumento'],
                'numeroIdentificacion' =>$data['numeroIdentificacion'],
                'sexo' =>$data['sexo'],
                'fechaNacimiento' =>$data['fechaNacimiento'],
            ]);        
            
            $evento->consultorio()->create([            
                'nombreConsultorio'=>$data['nombreConsultorio'],               
                'direccionConsultorio'=>$data['direccionConsultorio'],
               
            ]);
            $evento->academico()->create([
                'numeroRegistroProfesional'=>$data['numeroRegistroProfesional'],
                'tituloAcademico'=>$data['tituloAcademico'],
                'institucion'=>$data['institucion'],
            ]);

           $evento->telefonos()->create([
                'numeroTelefono'=>$data['numeroTelefono'],
                'tipoTelefono'=>$data['tipoTelefono'],
            ]);

            $evento->correosElectronicos()->create([
                'correoElectronico'=>$data['correoElectronico'],
                'tipoCorreo'=>$data['tipoCorreo'],
            ]);
        });
    } */

    public function actualizarTerapeuta($identificacion)
    {  
        /* $data = $this->validated();
        $evento = Evento::findOrFail($identificacion); 
        
        $evento->identificacion()->update([
            'primerNombre' =>$data['primerNombre'],
            'segundoNombre' =>$data['segundoNombre'],
            'primerApellido' =>$data['primerApellido'],
            'segundoApellido' =>$data['segundoApellido'],
            'tipoDocumento' =>$data['tipoDocumento'],
            'numeroIdentificacion' =>$data['numeroIdentificacion'],
            'sexo' =>$data['sexo'],
            'fechaNacimiento' =>$data['fechaNacimiento'],
        ]);    
        

        $evento->consultorio()->update([            
            'nombreConsultorio' =>$data['nombreConsultorio'],               
            'direccionConsultorio' =>$data['direccionConsultorio'],
        ]);
        $evento->academico()->update([
            'numeroRegistroProfesional' =>$data['numeroRegistroProfesional'],
            'tituloAcademico' =>$data['tituloAcademico'],
            'institucion' =>$data['institucion'],
        ]);

        $evento->telefonos()->update([
            'numeroTelefono' =>$data['numeroTelefono'],
            'tipoTelefono' =>$data['tipoTelefono'],
        ]);

        $evento->correosElectronicos()->update([
            'correoElectronico' =>$data['correoElectronico'],
            'tipoCorreo' =>$data['tipoCorreo'],
        ]);
    } */

}
