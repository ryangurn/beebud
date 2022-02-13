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
        Schema::create('extended_runtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->dateTime("last_reading_timestamp");
            $table->dateTime("runtime_date");
            $table->integer("runtime_interval");
            $table->string("actual_temperature"); // arr
            $table->string("actual_humidity"); // arr
            $table->string("desired_heat"); // arr
            $table->string("desired_cool"); // arr
            $table->string("desired_humidity"); // arr
            $table->string("desired_dehumidity"); // arr
            $table->string("dm_offset"); // arr
            $table->string("hvac_mode"); // arr
            $table->string("heat_pump_1"); // arr
            $table->string("heat_pump_2"); // arr
            $table->string("aux_heat_1"); // arr
            $table->string("aux_heat_2"); // arr
            $table->string("aux_heat_3"); // arr
            $table->string("cool_1"); // arr
            $table->string("cool_2"); // arr
            $table->string("fan"); // arr
            $table->string("humidifier"); // arr
            $table->string("dehumidifier"); // arr
            $table->string("economizer"); // arr
            $table->string("ventilator"); // arr
            $table->integer("current_electricity_bill");
            $table->integer("projected_electricity_bill");

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
        Schema::dropIfExists('extended_runtimes');
    }
};
