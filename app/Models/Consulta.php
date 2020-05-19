<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = "consultas";

    protected $fillable = [ 'evento_id',
                                        'observacionAnálisis',
                                        'plan',
                                        'finalidadConsulta',
                                        'causaExterna',
                                        'valorConsulta',
                                        'codigoConsulta',
                                        'tipoUsuario',];
                                       
    protected $guarded = ['id'];
}
