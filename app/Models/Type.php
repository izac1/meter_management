<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $fillable = ['name'];


    public function pokazanie()
    {
        return $this->hasMany('App\Models\Pokazanie');
    }

    public function tarify()
    {
        return $this->hasMany('App\Models\Tarify');
    }
}
