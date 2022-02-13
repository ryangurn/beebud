<?php

use App\Models\Climate;
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
        Schema::create('remote_sensors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->nullable();
            $table->foreignIdFor(Climate::class)->nullable();
            $table->string('identifier');
            $table->string('name');
            $table->string('type');
            $table->string('code');
            $table->boolean('in_use');
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
        Schema::dropIfExists('remote_sensors');
    }
};
