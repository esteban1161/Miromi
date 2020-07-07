<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table = "examen_fisicos";

    protected $fillable = [ 'evento_id',
                                        'presionArterialSistolica',
                                        'presionArterialDiastolica',
                                        'frecuenciaCardiaca',
                                        'frecuenciaRespiratoria',
                                        'temperatura',
                                        'saturaciónO2',
                                        'peso',
                                        'talla',
                                        'masaCorporal',
                                        'aspectoGeneral',
                                        'cuello',
                                        'abdomen',
                                        'pielAnexosEF',
                                        'neurológico',
                                        'otorrinolaringologico',
                                        'cardioPulmonarEF',
                                        'extremidadesEF',
                                        'genitales',
                                        'otrosEF',];
    
    protected $guarded = ['id'];

    public $timestamps = false;

}
