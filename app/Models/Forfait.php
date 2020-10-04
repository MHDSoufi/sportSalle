<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}
