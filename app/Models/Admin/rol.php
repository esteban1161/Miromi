<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = ['rols'];
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
