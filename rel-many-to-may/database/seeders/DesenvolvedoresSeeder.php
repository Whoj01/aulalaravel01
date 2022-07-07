<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('desenvolvedors')->insert(["nome" => "johnny", "cargo" => "senior"]);
        DB::table('desenvolvedors')->insert(["nome" => "josue", "cargo" => "junior"]);
        DB::table('desenvolvedors')->insert(["nome" => "gustavo", "cargo" => "pleno"]);

    }
}
