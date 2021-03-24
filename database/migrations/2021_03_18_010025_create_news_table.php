<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('title')->nullable();
            $table->longtext('description');
            $table->enum('type', [0, 1])->default(0)->comment('0 - Nuevos servicios, 1 - Anuncio, 2');
            $table->enum('status', [0, 1, 2])->default(0)->comment('0 - Desactivado, 1 - Activado, 2 - Expirado');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
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
        Schema::dropIfExists('news');
    }
}
