<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = ['name','email'];

 public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeSlug($query, $email)
    {
        if($email)
            return $query->where('slug', 'LIKE', "%$email%");
    }


}
