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
        Schema::create('runtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string("runtime_revision");
            $table->boolean("connected");
            $table->dateTime("first_connected");
            $table->dateTime("connect_date_time");
            $table->dateTime("disconnect_date_time");
            $table->dateTime("last_modified");
            $table->dateTime("last_status_modified");
            $table->date("runtime_date");
            $table->integer("runtime_interval");
            $table->integer("actual_temperature");
            $table->integer("actual_humidity");
            $table->integer("raw_temperature");
            $table->integer("show_icon_mode");
            $table->integer("desired_heat");
            $table->integer("desired_cool");
            $table->integer("desired_humidity");
            $table->integer("desired_dehumidity");
            $table->string("desired_fan_mode");
            $table->integer("actual_voc");
            $table->integer("actual_co2");
            $table->integer("actual_aq_accuracy");
            $table->integer("actual_aq_score");
            $table->string("desired_heat_range"); // integer array
            $table->string("desired_cool_range"); // integer array
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
        Schema::dropIfExists('runtimes');
    }
};
