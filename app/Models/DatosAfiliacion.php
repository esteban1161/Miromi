<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosAfiliacion extends Model
{
    protected $table = "datos_afiliacions";
    protected $fillable = ['datos_identificacion_id',
                                        'TipoVinculacion',
                                        'Aseguradora',
                                        'ResponsableMedico',
                                        'ParentescoResponsable',
                                        'TelefonoResponsable',];
    protected $guarded = ['id'];
}
