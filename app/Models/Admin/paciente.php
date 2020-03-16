<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";
    protected $fillable = ['primerNombre', 
                                        'segundoNombre', 
                                        'primerApellido', 
                                        'segundoApellido',
                                        'tipoDocumento',
                                        'numeroIdentificacion',
                                        'sexo',
                                        'fechaNacimiento'
                                    ];
    protected $guarded = ['id'];
}
