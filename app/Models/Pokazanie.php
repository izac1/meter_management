<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokazanie extends Model
{
    protected $table = 'pokazanie';
    protected $fillable = ['value'];


    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
