<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $filliable = [
        'nome',
        'telefone'
    ];

    public function endereco(){
       return $this->hasOne('App\Models\Endereco', 'cliente_id', 'id'); // se precisar pode passar mais um argumento dentro do hasOne, passando o campo dentro do endereco o campo q vc quer referenciar, depois por ultimo passa o campo na tabela de fora que vc quer
    }
}
