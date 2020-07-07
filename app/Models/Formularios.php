<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{
    protected $table = "formularios";

    protected $fillable = ['nombre', 
                                        'routeCreate',
                                        'routeShow'];
    
    protected $guarded = ['id'];

    public $timestamps = false;
    
    public function eventos(){
        return $this->hasOne(Evento::class);
      }
}
