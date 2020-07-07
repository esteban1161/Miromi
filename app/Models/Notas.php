<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $table = "notas";
    protected $fillable = [ 'evento_id',
                                        'titulo',
                                        'notas',
    ];
    
    protected $guarded = ['id'];

    public $timestamps = false;
}
