<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "pais";
    protected $fillable =   ['nombrePais',
                                        'indicativo'];
    protected $guarded = ['id'];

    public $timestamps = false;

    public function ciudad(){
        return $this->hasMany(Ciudad::class);
    }
}
