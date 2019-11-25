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
            $table->string('name')->nullable(false);
            $table->integer('genero_id')->nullable(false);
            $table->integer('editora_id')->nullable(false);
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('generos')
                ->onDelete('cascade');
            $table->foreign('editora_id')->references('id')->on('editoras')
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
