<?php

use Illuminate\Database\Seeder;

class EditorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoras')->insert([
            'nome' => 'Editora Fulano de Tal do Brasil',
        ]);
        DB::table('editoras')->insert([
            'nome' => 'Editora PHP LTDA',
        ]);
        DB::table('editoras')->insert([
            'nome' => 'Editora Developers',
        ]);
    }
}
