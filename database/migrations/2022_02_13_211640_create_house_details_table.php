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
        Schema::create('house_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string('style');
            $table->integer('size');
            $table->integer('number_of_floors');
            $table->integer('number_of_rooms');
            $table->integer('number_of_occupants');
            $table->integer('age');
            $table->integer('window_efficiency');
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
        Schema::dropIfExists('house_details');
    }
};
