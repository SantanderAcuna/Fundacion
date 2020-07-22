<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    protected $fillable = ['codigo','nombre', 'regimen'];


    public function eps()
    {

        return $this->belongsTo(Afiliacion::class);
    }





}
