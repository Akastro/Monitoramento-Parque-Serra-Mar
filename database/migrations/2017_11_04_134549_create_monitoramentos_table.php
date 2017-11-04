<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoramentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoramentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo');
            $table->integer('status');
            $table->integer('prioridade');
            $table->string('imagem',300);
            $table->string('observacao',200);
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
        Schema::dropIfExists('monitoramentos');
    }
}
