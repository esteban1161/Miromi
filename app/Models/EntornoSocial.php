<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntornoSocial extends Model
{
    protected $table = "entorno_socials";
    protected $fillable = [ 'evento_id',
                                        'convivencia',
                                        'cronologia',
                                        'recreacion',
                                        'cuidadores',
                                        'hermanos',
                                        'biopatografia',
                                    ];
    protected $guarded = ['id'];

    public $timestamps = false;
}
