<?php

use App\Models\Program;
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
        Schema::create('climates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Program::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('climate_reference');
            $table->boolean('is_occupied');
            $table->boolean('is_optimized');
            $table->string('cool_fan');
            $table->string('heat_fan');
            $table->string('vent');
            $table->integer('ventilator_min_on_time');
            $table->string('owner');
            $table->string('type');
            $table->integer('color');
            $table->integer('cool_temp');
            $table->integer('heat_temp');
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
        Schema::dropIfExists('climates');
    }
};
