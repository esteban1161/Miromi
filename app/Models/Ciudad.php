<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudads";
    protected $fillable = ['pais_id',
                                        'nombreCiudad'];
    protected $guarded = ['id'];
    
    public $timestamps = false;

    public function pais(){
        return $this->belongsTo(Pais::class);
    }
}
