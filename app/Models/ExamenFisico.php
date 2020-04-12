<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table = "examen_fisicos";

    protected $fillable = [ 'evento_id',
                                        'peso',
                                        'talla',
                                        'temperatura',
                                        'presionArterial',
                                        'frecuenciaCardiaca',
                                        'frecuenciaRespiratoria',
                                        'saturaciónO2',
                                        'aspectoGeneral',
                                        'otorrinolaringologico',
                                        'cuello',
                                        'cardioPulmonar',
                                        'abdomen',
                                        'genitales',
                                        'miembros',
                                        'pielAnexosEF',
                                        'neurológico',
                                        'otros',];
    
    protected $guarded = ['id'];
}
