<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo_url');
            $table->text('about_info');
            $table->string('soc_link_vk');
            $table->string('soc_link_fb');
            $table->string('soc_link_inst');
            $table->string('soc_link_telegram');
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
        Schema::dropIfExists('table_settings');
    }
}
