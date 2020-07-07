<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivosAdjuntos extends Model
{
    protected $table = "archivos_adjuntos";
    protected $fillable = ['evento_id',
                                        'nombre',
                                        'url',];
    protected $guarded = ['id'];

    public $timestamps = false;

}
