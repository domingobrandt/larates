<?php

namespace ux-camp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function roles(){
        return $this->belongsToMany('ux-camp\Role');
    }
}
