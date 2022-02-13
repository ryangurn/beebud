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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Thermostat::class)->constrained()->cascadeOnDelete();
            $table->string("hvac_mode");
            $table->string("last_service_date");
            $table->boolean("service_remind_me");
            $table->integer("months_between_service");
            $table->date("remind_me_date");
            $table->string("vent");
            $table->integer("ventilator_min_on_time");
            $table->boolean("service_remind_technician");
            $table->string("ei_location");
            $table->integer("cold_temp_alert");
            $table->boolean("cold_temp_alert_enabled");
            $table->integer("hot_temp_alert");
            $table->boolean("hot_temp_alert_enabled");
            $table->integer("cool_stages");
            $table->integer("heat_stages");
            $table->integer("max_set_back");
            $table->integer("max_set_forward");
            $table->integer("quick_save_set_back");
            $table->integer("quick_save_set_forward");
            $table->boolean("has_heat_pump");
            $table->boolean("has_forced_air");
            $table->boolean("has_boiler");
            $table->boolean("has_humidifier");
            $table->boolean("has_erv");
            $table->boolean("has_hrv");
            $table->boolean("condensation_avoid");
            $table->boolean("use_celsius");
            $table->boolean("use_time_format_12");
            $table->string("locale");
            $table->string("humidity");
            $table->string("humidifier_mode");
            $table->integer("backlight_on_intensity");
            $table->integer("backlight_sleep_intensity");
            $table->integer("backlight_off_time");
            $table->integer("sound_tick_volume");
            $table->integer("sound_alert_volume");
            $table->integer("compressor_protection_min_time");
            $table->integer("compressor_protection_min_temp");
            $table->integer("stage_1_heating_differential_temp");
            $table->integer("stage_1_cooling_differential_temp");
            $table->integer("stage_1_heating_dissipation_time");
            $table->integer("stage_1_cooling_dissipation_time");
            $table->boolean("heat_pump_reversal_on_cool");
            $table->boolean("fan_control_required");
            $table->integer("fan_min_on_time");
            $table->integer("heat_cool_min_delta");
            $table->integer("temp_correction");
            $table->string("hold_action");
            $table->boolean("heat_pump_ground_water");
            $table->boolean("has_electric");
            $table->boolean("has_dehumidifier");
            $table->string("dehumidifier_mode");
            $table->integer("dehumidifier_level");
            $table->boolean("dehumidify_with_ac");
            $table->integer("dehumidify_overcool_offset");
            $table->boolean("auto_heat_cool_feature_enabled");
            $table->boolean("wifi_offline_alert");
            $table->integer("heat_min_temp");
            $table->integer("heat_max_temp");
            $table->integer("cool_min_temp");
            $table->integer("cool_max_temp");
            $table->integer("heat_range_high");
            $table->integer("heat_range_low");
            $table->integer("cool_range_high");
            $table->integer("cool_range_low");
            $table->string("user_access_code");
            $table->integer("user_access_setting");
            $table->integer("aux_runtime_alert");
            $table->integer("aux_outdoor_temp_alert");
            $table->integer("aux_max_outdoor_temp");
            $table->boolean("aux_runtime_alert_notify");
            $table->boolean("aux_outdoor_temp_alert_notify");
            $table->boolean("aux_runtime_alert_notify_technician");
            $table->boolean("aux_outdoor_temp_alert_notify_technician");
            $table->boolean("disable_pre_heating");
            $table->boolean("disable_pre_cooling");
            $table->boolean("installer_code_required");
            $table->string("dr_accept");
            $table->boolean("is_rental_property");
            $table->boolean("use_zone_controller");
            $table->integer("random_start_delay_cool");
            $table->integer("random_start_delay_heat");
            $table->integer("humidity_high_alert");
            $table->integer("humidity_low_alert");
            $table->boolean("disable_heat_pump_alerts");
            $table->boolean("disable_alerts_on_idt");
            $table->boolean("humidity_alert_notify");
            $table->boolean("humidity_alert_notify_technician");
            $table->boolean("temp_alert_notify");
            $table->boolean("temp_alert_notify_technician");
            $table->integer("monthly_electricity_bill_limit");
            $table->boolean("enable_electricity_bill_alert");
            $table->boolean("enable_projected_electricity_bill_alert");
            $table->integer("electricity_billing_day_of_month");
            $table->integer("electricity_bill_cycle_months");
            $table->integer("electricity_bill_start_month");
            $table->integer("ventilator_min_on_time_home");
            $table->integer("ventilator_min_on_time_away");
            $table->boolean("backlight_off_during_sleep");
            $table->boolean("auto_away");
            $table->boolean("smart_circulation");
            $table->boolean("follow_me_comfort");
            $table->string("ventilator_type");
            $table->boolean("is_ventilator_timer_on");
            $table->string("ventilator_off_date_time");
            $table->boolean("has_u_v_filter");
            $table->boolean("cooling_lockout");
            $table->boolean("ventilator_free_cooling");
            $table->boolean("dehumidify_when_heating");
            $table->boolean("ventilator_dehumidify");
            $table->string("group_ref");
            $table->string("group_name");
            $table->integer("group_setting");
            $table->string("fan_speed");
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
        Schema::dropIfExists('settings');
    }
};
