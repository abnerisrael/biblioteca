<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable(false);
            $table->integer('genero_id')->nullable(false);
            $table->integer('editora_id')->nullable(false);
            $table->integer('status_id')->default(1); //1-> disponivel //2->alugado
            $table->integer('cliente_id')->nullable(true);;
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('generos')
                ->onDelete('cascade');
            $table->foreign('editora_id')->references('id')->on('editoras')
                ->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
