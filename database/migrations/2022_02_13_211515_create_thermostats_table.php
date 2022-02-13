<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thermostats', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('name');
            $table->string('thermostat_revision');
            $table->boolean('registered');
            $table->string('model_number');
            $table->string('brand');
            $table->string('features');
            $table->dateTime('last_modified');
            $table->time('thermostat_time');
            $table->dateTime('utc_time');
            $table->string('equipment_status');
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
        Schema::dropIfExists('thermostats');
    }
};
