<?php

use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'nome' => 'Um Livro Qualquer',
            'genero_id' => 1,
            'editora_id' => 1,
        ]);
    }
}
