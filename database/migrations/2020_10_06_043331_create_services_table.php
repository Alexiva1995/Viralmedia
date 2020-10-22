<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('package_name');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->double('minimum_amount')->default(0)->comment('monto minimo');
            $table->double('maximum_amount')->default(0)->comment('monto maximo');
            $table->double('price')->default(0);
            $table->enum('status', [0, 1])->default(0)->comment('0 - desactivado, 1 - activado');
            $table->string('type_services');
            $table->enum('drip_feed', [0, 1])->default(0)->comment('0 - desactivado, 1 - activado');
            $table->string('type')->comment('si el servicio es manua o por medio de una api');
            $table->string('api_provide_name')->nullable()->comment('nombre del api a usar');
            $table->string('api_service_id')->nullable()->comment('ID del api a usar');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('services');
    }
}
