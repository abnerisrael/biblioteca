<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusTableSeeder::class,
            GenerosTableSeeder::class,
            EditorasTableSeeder::class,
            ClientesTableSeeder::class,
            LivrosTableSeeder::class,
        ]);
    }
}
