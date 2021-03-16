<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Timezone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_zone', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('list_value')->nullable();
            $table->string('list_abbr')->nullable();
            $table->string('list_offset')->nullable();
            $table->string('list_isdst')->nullable();
            $table->string('list_text')->nullable();
            $table->string('list_utc')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('time_zone');
        
    }
}