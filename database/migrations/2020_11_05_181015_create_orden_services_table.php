<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('iduser')->unsigned();;
            $table->foreign('iduser')->references('id')->on('users');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('cantidad');
            $table->string('link', 200)->nullable()->comment('para los servicios que usan link');
            $table->string('usuario', 200)->nullable()->comment('para los servicios que usan usuario');
            $table->string('email', 200)->nullable()->comment('para los servicios que usan email');
            $table->string('email_respaldo', 200)->nullable()->comment('para los servicios que usan email_respaldo');
            $table->string('whatsapp', 200)->nullable()->comment('para los servicios que usan whatsapp');
            $table->decimal('total');
            $table->integer('count_start')->nullable();
            $table->integer('count_end')->nullable();
            $table->enum('status', [0, 1, 2, 3])->default(0)->comment('0 - En Espera, 1 - Completada, 2 - Rechazada, 3 - Cancelada');
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
        Schema::dropIfExists('orden_services');
    }
}
