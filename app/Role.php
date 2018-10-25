<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function roles(){
        return $this->belongsToMany('Uxcamp\Role');
    }
}
