<?php

namespace Uxcamp;

use Illuminate\Database\Eloquent\Model;
use Uxcamp\Cliente;

class Empresa extends Model
{
    protected $fillable = ['name','bio','avatar','slug','cliente_id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function clientes(){ 
        return $this->belongsToMany('\Uxcamp\Cliente', 'clientes_empresas','empresa_id','cliente_id'); 
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
