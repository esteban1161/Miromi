<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    protected $table = "datos_academicos";
    protected $fillable = ['datos_identificacion_id',
                                        'tipoProfesional',
                                        'numeroRegistroProfesional',
                                        'tituloAcademico',
                                        'institucion',];
    protected $guarded = ['id'];
}
