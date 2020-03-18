<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosDemograficos extends Model
{

    protected $table = "datos_demograficos";
    protected $fillable = ['datos_identificacion_id',
                                        'paisNacimiento',
                                        'ciudadNacimiento',
                                        'estadoCivil',
                                        'escolaridad',
                                        'ocupacion',
                                        'credoReligioso',
                                        'paisResidencia', 
                                        'departamentoResidencia', 
                                        'ciudadResidencia', 
                                        'localidadResidencia', 
                                        'direccionResidencia', 
                                        'zonaResidencia'];
    protected $guarded = ['id'];
}