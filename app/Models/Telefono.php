<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table = "telefonos";

    protected $fillable = ['evento_id',
                                       'tipoTelefono',
                                       'numeroTelefono'];
                                       
    protected $guarded = ['id'];

    public $timestamps = false;

    public function evento(){
        return $this->belongsTo(Evento::class) ;
    }
}
