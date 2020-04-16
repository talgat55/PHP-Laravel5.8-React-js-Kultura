<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCultureDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culture_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status');
            $table->integer('sort');
            $table->integer('category');
            $table->string('image');
            $table->string('name');
            $table->text('anons');
            $table->longText('text');

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
        Schema::dropIfExists('culture_details');
    }
}
