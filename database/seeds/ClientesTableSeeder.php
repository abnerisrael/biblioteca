<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => 'Abner Israel Andrade',
            'cpf' => '01122233344',
            'email' => 'emailficticio@exemplane.com',
        ]);
    }
}
