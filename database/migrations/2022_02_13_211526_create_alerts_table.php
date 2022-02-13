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
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string('acknowledge_reference');
            $table->string('acknowledgement');
            $table->date('date');
            $table->time('time');
            $table->string('severity');
            $table->string('text');
            $table->integer('alert_number');
            $table->string('alert_type');
            $table->boolean('operator_alert');
            $table->string('reminder');
            $table->boolean('show_idt');
            $table->boolean('show_web');
            $table->boolean('send_email');
            $table->boolean('remind_me_later');
            $table->string('thermostat_identifier');
            $table->string('notification_type');
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
        Schema::dropIfExists('alerts');
    }
};
