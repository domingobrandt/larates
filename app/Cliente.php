<?php

namespace Laratest;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['name','avatar'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
