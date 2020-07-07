<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudads";
    protected $fillable = ['departamentos_id',
                                        'nombreCiudad'];
    protected $guarded = ['id'];
    
    public $timestamps = false;

    public function scopeCiudades($query, $depatamentos){
        
        return $query   ->where('departamentos_id', $depatamentos);                                
    }
}
