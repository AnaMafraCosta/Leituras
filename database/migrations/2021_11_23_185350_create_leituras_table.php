<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeiturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leituras', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('genero');
            $table->string('paginas');
            $table->string('editora');
            $table->string('idioma');
            $table->string('resenha');
            $table->string('frase');
            $table->string('nota');
            $table->unsignedBigInteger('user_id')
                ->nullable();

            //criação da chave estrangeira
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->timestamps(); //created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leituras');
    }
}
