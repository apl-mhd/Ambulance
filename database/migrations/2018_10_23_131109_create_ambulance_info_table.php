<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulanceInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('email',64);
            $table->string('drivername',64);
            $table->string('drivermobile',11);
            $table->string('ownername',64);
            $table->string('ownermobile',11);
            $table->string('drivernid',20);
            $table->string('ambulancename',32);
            $table->string('type',10);
            $table->string('location',32);
            $table->string('hospital',64);
            $table->tinyInteger('acstatus');
            $table->string('numberplate',16);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulance_info');
    }
}
