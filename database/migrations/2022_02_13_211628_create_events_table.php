<?php

use App\Models\Thermostat;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->string('name');
            $table->boolean('running');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time');
            $table->boolean('is_occupied');
            $table->boolean('is_cool_off');
            $table->boolean('is_heat_off');
            $table->integer('cool_hold_temp');
            $table->integer('heat_hold_temp');
            $table->string('fan');
            $table->string('vent');
            $table->integer('ventilator_min_on_time');
            $table->boolean('is_optional');
            $table->boolean('is_temperature_relative');
            $table->integer('cool_relative_temp');
            $table->integer('heat_relative_temp');
            $table->boolean('is_temperature_absolute');
            $table->integer('duty_cycle_percentage');
            $table->integer('fan_min_on_time');
            $table->boolean('occupied_sensor_active');
            $table->boolean('unoccupied_sensor_active');
            $table->integer('dr_ramp_up_temp');
            $table->integer('dr_ramp_up_time');
            $table->string('link_reference');
            $table->string('hold_climate_reference');
            $table->String('fan_speed');
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
        Schema::dropIfExists('events');
    }
};
