<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaBlanco extends Model
{
    protected $table = "historia_blancos";
 
    protected $fillable = ['evento_id',                    
                                       'formatoBlanco',
                                      ];
    protected $guarded = ['id'];
}
