<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;
use Uxcamp\Empresa;

class Cliente extends Model
{
    protected $fillable = ['name','bio','avatar','slug', 'empresa_id','cliente_id'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function empresas(){ 
      return $this->belongsToMany('\Uxcamp\Empresa', 'clientes_empresas','cliente_id','empresa_id'); 
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
