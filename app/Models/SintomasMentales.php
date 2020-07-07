<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SintomasMentales extends Model
{
    protected $table = "sintomas_mentales";
    protected $fillable = [ 'evento_id',
                                        'memoria',
                                        'emociones',
                                        'relacionamiento',
                                        'comportamiento',
                                        'otrosMentales',
                                    ];
    protected $guarded = ['id'];

    public $timestamps = false;
}
