<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $fillable=['nombre'];
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre']=mb_strtoupper($value);
    }
}
