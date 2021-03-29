<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('iduser')->unsigned();
            $table->foreign('iduser')->references('id')->on('users');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('issue');
            $table->longtext('description');
            $table->longtext('note_admin')->nullable();
            $table->enum('status', [0, 1, 2, 3])->default(0)->comment('0 - En Espera, 1 - Solucionado, 2 - Procesando, 3 - Cancelada');
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
        Schema::dropIfExists('tickets');
    }
}
