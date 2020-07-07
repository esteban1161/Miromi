<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    protected $table = "datos_academicos";
    protected $fillable = [ 'evento_id',
                                        'numeroRegistroProfesional',
                                        'tituloAcademico',
                                        'institucion',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
