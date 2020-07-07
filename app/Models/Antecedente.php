<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    protected $table = "antecedentes";
    protected $fillable = [ 'evento_id',
                                        'patológicos',
                                        'quirúrgicos',
                                        'farmacológicos',
                                        'toxicológicos',
                                        'familiares',
                                        'traumáticos',
                                        'hospitalarios',
                                        'inmunológicosVacunas',
                                        'alérgicos',
                                        'tratamientoOdontológico',
                                        'formulaObstétrica',
                                        'fechaUltimaMenstruacion',
                                        'menarquia',
                                        'menopausia',
                                        'planificación',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
