<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = "consultas";

    protected $fillable = [ 'evento_id',
                                        'dxPrincipal',
                                        'tipoDiagnostico',
                                        'dxRelacionado1',
                                        'dxRelacionado2',
                                        'dxRelacionado3',
                                        'tipoConsulta',
                                        'finalidadConsulta',
                                        'causaExterna',
                                        'valorConsulta',
                                        'tipoUsuario',
                                        'observacionAnálisis',
                                        'plan',];
                                       
    protected $guarded = ['id'];
}
