<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosConsultorios extends Model
{
    protected $table = "datos_consultorios";
    protected $fillable = ['datos_identificacion_id',
                                        'nombreConsultorio',
                                        'telefonoConsultorio',
                                        'direccionConsultorio',
                                        'correoElectronicoConsultorio',
                                        'paginasWebConsultorio', 
                                        'codigoSecretaria',];
    protected $guarded = ['id'];
}
