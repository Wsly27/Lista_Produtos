<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function categorias(){
        return $this->hasMany(Categoria::class);
    }

    protected $fillable = ['nome'];
}
