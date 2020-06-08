<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormatoBase extends Model
{
    protected $table = "formato_bases";
 
    protected $fillable = ['evento_id',                   
                                        'nombreAcompañante',
                                        'parentescoAcompañante',
                                        'fechaConsulta',
                                        'horaConsulta',
                                        'edadActual',
                                        'consultorios',
                                        'motivoConsulta',
                                        'enfermedadActual',
                                        'consultorio',
                                        'personalizado1',
                                        'personalizado2',
                                        'personalizado3',
                                        'personalizado4',
                                      ];
    protected $guarded = ['id'];

    
}
