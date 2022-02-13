<?php

use App\Models\NotificationSetting;
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
        Schema::create('equipment_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NotificationSetting::class)->constrained()->cascadeOnDelete();
            $table->date('filter_last_changed');
            $table->integer('filter_life');
            $table->string('filter_life_units');
            $table->string('remind_me_date');
            $table->boolean('enabled');
            $table->string('type');
            $table->boolean('remind_technician');
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
        Schema::dropIfExists('equipment_settings');
    }
};
