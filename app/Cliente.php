<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;
use Uxcamp\Empresa;

class Cliente extends Model
{
    protected $fillable = ['name','bio','avatar','slug'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function empresa(){ 
        return $this->belongsToMany('\Uxcamp\Empresa','cliente_empresa')
        ->withPivot('empresa_id'); 
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
