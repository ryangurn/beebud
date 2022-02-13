<?php

use App\Models\Weather;
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
        Schema::create('weather_forcasts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Weather::class)->constrained()->cascadeOnDelete();
            $table->integer('weather_symbol');
            $table->dateTime('datetime');
            $table->string('condition');
            $table->integer('temperature');
            $table->integer('pressure');
            $table->integer('relative_humidity');
            $table->integer('dewpoint');
            $table->integer('visibility');
            $table->integer('wind_speed');
            $table->integer('wind_gust');
            $table->string('wind_direction');
            $table->integer('wind_bearing');
            $table->integer('pop');
            $table->integer('temp_high');
            $table->integer('temp_low');
            $table->integer('sky');
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
        Schema::dropIfExists('weather_forcasts');
    }
};
