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
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string('contractor_reference');
            $table->string('name');
            $table->string('phone');
            $table->string('street_address');
            $table->string('city');
            $table->string('province_state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('email');
            $table->string('web');
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
        Schema::dropIfExists('technicians');
    }
};
