<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAfisha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afisha', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->longText('text');
            $table->string('image');
            $table->string('age_limit');
            $table->string('slug');
            $table->boolean('status');
            $table->integer('sort');
            $table->string('duration');
            $table->dateTime('date_time_launch', 0);
            $table->integer('place_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('afisha', function($table) {
            $table->foreign('place_id')
                ->references('id')->on('places');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_afisha');
    }
}
