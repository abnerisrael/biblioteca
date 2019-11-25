<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_livro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->nullable(false);
            $table->integer('livro_id')->nullable(false);
            $table->integer('cliente_id')->nullable(false);
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('cascade');
            $table->foreign('livro_id')->references('id')->on('livro')
                ->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('cliente')
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
        Schema::dropIfExists('status_livro');
    }
}
