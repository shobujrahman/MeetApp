<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('admob_inter')->nullable();
            $table->string('admob_native')->nullable();
            $table->string('admob_banner')->nullable();
            $table->string('admob_reward')->nullable();
            $table->string('fb_inter')->nullable();
            $table->string('fb_native')->nullable();
            $table->string('fb_banner')->nullable();
            $table->string('fb_reward')->nullable();
            $table->string('startup_inter')->nullable();
            $table->string('startup_native')->nullable();
            $table->string('startup_banner')->nullable();
            $table->string('startup_reward')->nullable();
            $table->string('ad_types');
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
        Schema::dropIfExists('advertisements');
    }
}
