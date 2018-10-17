<?php

namespace Laratest;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
