<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'nome' => 'Ação',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Aventura',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Chanchada',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Catástrofe',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Comédia',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Comédia romântica',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Comédia dramática',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Comédia de ação',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Cristão',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Dança',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Documentário',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Docuficção',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Drama',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Didático',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Espionagem',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Escolar',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Faroeste (ou western)',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Fantasia',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Ficção científica',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Guerra',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Literatura',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Musical',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Policial',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Romance',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Religioso',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Suspense',
        ]);
        DB::table('generos')->insert([
            'nome' => 'Terror',
        ]);
    }
}
