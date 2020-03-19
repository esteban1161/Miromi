<?php

namespace App\Models;

use App\Models\Admin\Paciente;
use Illuminate\Database\Eloquent\Model;

class DatosIdentificacion extends Model
{
    protected $table = "datos_identificacions";
    protected $fillable = ['primerNombre', 
                                        'segundoNombre', 
                                        'primerApellido', 
                                        'segundoApellido',
                                        'tipoDocumento',
                                        'numeroIdentificacion',
                                        'sexo',
                                        'fechaNacimiento'];
    protected $guarded = ['id'];

    public function datosDemograficos(){
        return $this->hasOne(DatosDemograficos::class);
    }
    public function datosAfiliacion(){
        return $this->hasOne(DatosAfiliacion::class);
    }
    public function datosAcademicos(){
        return $this->hasOne(DatosAcademicos::class);
    }
    public function datosConsultorios(){
        return $this->hasOne(DatosConsultorios::class);
    }

}
