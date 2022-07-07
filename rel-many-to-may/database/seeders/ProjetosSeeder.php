<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(["nome" => "sistema de alocacao de recursos", "estimativa_horas" => 200]);
        DB::table('projetos')->insert(["nome" => "sistema de bibliotecas", "estimativa_horas" => 1000]);
        DB::table('projetos')->insert(["nome" => "sistema de vendas", "estimativa_horas" => 2000]);
        DB::table('projetos')->insert(["nome" => "novo sistema", "estimativa_horas" => 2300]);


        
        
    }
}
