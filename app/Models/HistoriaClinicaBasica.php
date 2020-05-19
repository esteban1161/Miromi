<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinicaBasica extends Model
{
    protected $table = "historia_Clinica_Basicas";
 
    protected $fillable = ['evento_id',                    
                                       'nombreAcompañante',
                                       'parentescoAcompañante',
                                       'fechaConsulta',
                                       'horaConsulta',
                                       'edadActual',
                                       'motivoConsulta',
                                       'enfermedadActual',
                                      ];
    protected $guarded = ['id'];
}
