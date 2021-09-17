<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensordataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensordata', function (Blueprint $table) {
            $table->ID()->unique();
            $table->float('Temp1');
            $table->float('Temp2');
            $table->float('Temp3');
            $table->float('rH1');
            $table->float('rh2');
            $table->float('rH3');
            $table->float('P1');
            $table->float('P2');
            $table->float('P3');
            $table->float('TA');
            $table->float('TB');
            $table->float('VOC1');
            $table->float('VOC2');
            $table->float('rH');
            $table->float('createdAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
//    public function down()
//    {
//        Schema::dropIfExists('sensordata');
//    }
}
