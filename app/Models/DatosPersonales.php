<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table = "datos_personales";

    protected $fillable = ['evento_id',
                                       'numeroTelefono',
                                       'correoElectronicoPersonal'];
                                       
    protected $guarded = ['id'];

}
