<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = ['id','name','email'];
    public $timestamp = false;

}
