<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([ 'nome' => 'camiste Polo', 'preco' => 100, 'stock' => 20, 'categoria_id' => 1]);
        DB::table('produtos')->insert([ 'nome' => 'calca jeans', 'preco' => 80, 'stock' => 5, 'categoria_id' => 1]);
        DB::table('produtos')->insert([ 'nome' => 'camisa manga longa', 'preco' => 170, 'stock' => 20, 'categoria_id' => 1]);
        DB::table('produtos')->insert([ 'nome' => 'jogos', 'preco' => 25.4, 'stock' => 20, 'categoria_id' => 2]);
        DB::table('produtos')->insert([ 'nome' => 'impressora', 'preco' => 84, 'stock' => 20, 'categoria_id' => 6]);
        DB::table('produtos')->insert([ 'nome' => 'Egeo', 'preco' => 14, 'stock' => 20, 'categoria_id' => 3]);
        DB::table('produtos')->insert([ 'nome' => 'cama de casal', 'preco' => 204, 'stock' => 20, 'categoria_id' => 4]);

        
    }
}
