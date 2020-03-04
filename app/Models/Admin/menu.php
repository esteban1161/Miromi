<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class menu extends Model
{
    protected $fillable = ['menu_id', 'nombre', 'url', 'edad', 'orden', 'icono'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
