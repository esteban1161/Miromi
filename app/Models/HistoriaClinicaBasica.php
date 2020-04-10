<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinicaBasica extends Model
{
    protected $table = "historia_Clinica_Basicas";
 
    protected $fillable = ['evento_id',                                       
                                       'identificacion_id',
                                       'nombreAcompañante',
                                       'parentescoAcompañante',
                                       'fechaConsulta',
                                       'horaConsulta',
                                       'edadActual',
                                       'enfermedadActual',
                                      ];
    protected $guarded = ['id'];
}
