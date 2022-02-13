<?php

use App\Models\Device;
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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Device::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('model');
            $table->integer('zone');
            $table->integer('sensor_id');
            $table->string('type');
            $table->string('usage');
            $table->integer('number_of_bits');
            $table->integer('bconstant');
            $table->integer('thermistor_size');
            $table->integer('temp_correction');
            $table->integer('gain');
            $table->integer('max_voltage');
            $table->integer('multiplier');
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
        Schema::dropIfExists('sensors');
    }
};
