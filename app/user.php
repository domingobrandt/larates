<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = ['name','email'];

    public function scopeId($query, $id)
    {
        if($id)
            return $query->where('slug', 'LIKE', "%$id%");
    }

 public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeEmail($query, $email)
    {
        if($email)
            return $query->where('slug', 'LIKE', "%$email%");
    }


}
