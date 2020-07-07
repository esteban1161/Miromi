<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recomendaciones extends Model
{
    protected $table = "recomendaciones";

    protected $fillable = ['recomendacion',
                                        'descripcion',];
                                        
    protected $guarded = ['id'];

    public $timestamps = false;
}
