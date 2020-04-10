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
}
