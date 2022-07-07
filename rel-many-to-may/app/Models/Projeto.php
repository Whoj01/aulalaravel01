<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    function desenvolvedors(){
        return $this->belongsToMany('App\Models\Desenvolvedor', 'alocacoes', 'desenvolvedor_id');
    }
}
