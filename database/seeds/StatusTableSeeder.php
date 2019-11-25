<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'nome' => 'locado',
        ]);

        DB::table('status')->insert([
            'nome' => 'nao locado',
        ]);

        DB::table('status')->insert([
            'nome' => 'removido',
        ]);
    }
}
