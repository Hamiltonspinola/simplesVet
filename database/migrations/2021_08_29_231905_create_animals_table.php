<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('historico_clinico');
            $table->date('nascimento');

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                    ->references('id')
                    ->on('clientes')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('raca_id');
            $table->foreign('raca_id')
                    ->references('id')
                    ->on('racas')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')
                    ->references('id')
                    ->on('especies')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
}
