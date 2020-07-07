<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecomendacionPaciente extends Model
{
    protected $table = "recomendacion_pacientes";
    
    protected $fillable = ['eventos_id',
                                        'recomendacion',
                                        'descripcion',];

    protected $guarded = ['id'];

    public $timestamps = false;
}
