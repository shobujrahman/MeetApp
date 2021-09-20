<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
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
            $table->string('video_ad_bonus')->nullable();
            $table->string('login_bonus')->nullable();
            $table->string('refrl_fnd_bonus')->nullable();
            $table->string('per_vdo_chrg')->nullable();
            $table->string('set_scnds_ads')->nullable();
            $table->string('ggl_play_id')->nullable();
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
}
