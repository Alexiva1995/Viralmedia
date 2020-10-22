<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSaldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_saldos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('iduser')->unsigned();;
            $table->foreign('iduser')->references('id')->on('users');
            $table->double('saldo');
            $table->string('metodo_pago');
            $table->string('id_transacion')->nullable()->comment('id de las transaciones de stripe, coinbase, payulatam y skrill');
            $table->tinyInteger('estado')->default(0)->comment('0 - esperando, 1 - aprobado, 2 - cancelado');
            $table->date('fecha_creacion');
            $table->date('fecha_procesado')->nullable();
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
        Schema::dropIfExists('add_saldos');
    }
}
