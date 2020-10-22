<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('last_name');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('whatsapp');
            $table->string('password');
            $table->enum('admin', [0, 1])->default(0)->comment('permite saber si un usuario es admin o no');
            $table->double('balance')->default(0);
            $table->double('wallet')->default(0);
            $table->enum('status', [0, 1, 2, 3, 4, 5])->default(0)->comment('0 - inactivo, 1 - activo, 2 - suspendido, 3 - bloqueado, 4 - caducado, 5 - eliminado');
            $table->bigInteger('id_pais')->unsigned()->nullable();
            $table->foreign('id_pais')->references('id')->on('countries');
            $table->bigInteger('referred_id')->default(1)->comment('ID del usuario patrocinador');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
