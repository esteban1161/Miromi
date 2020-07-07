<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosConsultorios extends Model
{
    protected $table = "datos_consultorios";
    protected $fillable = [ 'evento_id',
                                        'nombreConsultorio',                                        
                                        'direccionConsultorio',
                                        'paginaWebConsultorio',
                                        'codigoSecretaria',
                                        'nitConsultorio',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
