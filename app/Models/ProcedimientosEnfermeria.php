<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedimientosEnfermeria extends Model
{
    protected $table = "procedimientos_enfermerias";

    protected $fillable = ['eventos_id',
                                        'fechaProcedimiento',
                                        'nombreProcedimiento',
                                        'descripcionProcedimiento',
                                        'observaciones',
                                        'complicaciones',
                                        'insumos',
                                        'OtrosProcedimientos',
                                        'Personalizado1',
                                        'Personalizado2',
                                    ];
                                        
    protected $guarded = ['id'];

    public $timestamps = false;
}
