<?php

use App\Models\RemoteSensor;
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
        Schema::create('sensor_capabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RemoteSensor::class)->constrained()->cascadeOnDelete();
            $table->string('identifier');
            $table->string('type');
            $table->string('value');
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
        Schema::dropIfExists('sensor_capabilities');
    }
};
