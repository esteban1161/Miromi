<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = "departamentos";
    protected $fillable = ['pais_id',
                                        'nombreDepartamento'];
    protected $guarded = ['id'];

    public $timestamps = false;
    
    public function scopeDepartamentos($query, $pais){
        
        return $query   ->where('pais_id', $pais);                                
    }
}
