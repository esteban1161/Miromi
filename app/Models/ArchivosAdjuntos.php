<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivosAdjuntos extends Model
{
    protected $table = "archivos_adjuntos";
    protected $fillable = [  'evento_id',
                                        'url',];
    protected $guarded = ['id'];
}
