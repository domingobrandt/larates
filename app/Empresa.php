<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;
use Uxcamp\Cliente;

class Empresa extends Model
{
    protected $fillable = ['name','bio','avatar','slug'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function cliente(){ 
        return $this->belongsToMany('\Uxcamp\Cliente','cliente_empresa')
        ->withPivot('cliente_id'); 
        }
        //Query Scope
        public function scopeName($query, $name)
        {
            if($name)
                return $query->where('name', 'LIKE', "%$name%");
        }

        public function scopeSlug($query, $slug)
        {
            if($slug)
                return $query->where('slug', 'LIKE', "%$slug%");
        }
        
        public function scopeBio($query, $bio)
        {
            if($bio)
                return $query->where('bio', 'LIKE', "%$bio%");
        }
    
}
