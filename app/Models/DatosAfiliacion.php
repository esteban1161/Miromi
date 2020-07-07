<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosAfiliacion extends Model
{
    protected $table = "datos_afiliacions";
    protected $fillable = [ 'evento_id',
                                        'tipoVinculacion',
                                        'aseguradora',
                                        'responsableMedico',
                                        'parentescoResponsable',
                                        'telefonoResponsable',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
