<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarify extends Model
{
    protected $table = 'tarify';
    protected $fillable = ['rate'];


    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
