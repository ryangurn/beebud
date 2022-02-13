<?php

use App\Models\State;
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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(State::class)->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->boolean('send_alert');
            $table->boolean('send_update');
            $table->integer('activation_delay');
            $table->integer('deactivation_delay');
            $table->integer('min_action_duration');
            $table->integer('heat_adjust_temp');
            $table->integer('cool_adjust_temp');
            $table->string('activate_relay');
            $table->boolean('activate_relay_open');
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
        Schema::dropIfExists('actions');
    }
};
