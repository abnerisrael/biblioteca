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
            'name' => 'Ação',
        ]);
        DB::table('generos')->insert([
            'name' => 'Aventura',
        ]);
        DB::table('generos')->insert([
            'name' => 'Chanchada',
        ]);
        DB::table('generos')->insert([
            'name' => 'Catástrofe',
        ]);
        DB::table('generos')->insert([
            'name' => 'Comédia',
        ]);
        DB::table('generos')->insert([
            'name' => 'Comédia romântica',
        ]);
        DB::table('generos')->insert([
            'name' => 'Comédia dramática',
        ]);
        DB::table('generos')->insert([
            'name' => 'Comédia de ação',
        ]);
        DB::table('generos')->insert([
            'name' => 'Cristão',
        ]);
        DB::table('generos')->insert([
            'name' => 'Dança',
        ]);
        DB::table('generos')->insert([
            'name' => 'Documentário',
        ]);
        DB::table('generos')->insert([
            'name' => 'Docuficção',
        ]);
        DB::table('generos')->insert([
            'name' => 'Drama',
        ]);
        DB::table('generos')->insert([
            'name' => 'Didático',
        ]);
        DB::table('generos')->insert([
            'name' => 'Espionagem',
        ]);
        DB::table('generos')->insert([
            'name' => 'Escolar',
        ]);
        DB::table('generos')->insert([
            'name' => 'Faroeste (ou western)',
        ]);
        DB::table('generos')->insert([
            'name' => 'Fantasia',
        ]);
        DB::table('generos')->insert([
            'name' => 'Ficção científica',
        ]);
        DB::table('generos')->insert([
            'name' => 'Guerra',
        ]);
        DB::table('generos')->insert([
            'name' => 'Literatura',
        ]);
        DB::table('generos')->insert([
            'name' => 'Musical',
        ]);
        DB::table('generos')->insert([
            'name' => 'Policial',
        ]);
        DB::table('generos')->insert([
            'name' => 'Romance',
        ]);
        DB::table('generos')->insert([
            'name' => 'Religioso',
        ]);
        DB::table('generos')->insert([
            'name' => 'Suspense',
        ]);
        DB::table('generos')->insert([
            'name' => 'Terror',
        ]);
    }
}
