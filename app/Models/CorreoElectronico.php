<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorreoElectronico extends Model
{
    protected $table = "correo_electronicos";

    protected $fillable = ['evento_id',
                                       'tipoCorreo',
                                       'correoElectronico'];
                                       
    protected $guarded = ['id'];
}
