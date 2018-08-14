<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home1');
            $table->string('link1');
            $table->string('home2');
            $table->string('link2');
            $table->string('home3');
            $table->string('link3');

            $table->string('bf1');
            $table->string('bf2');
            $table->string('bf3');
            $table->string('bf4');
            $table->string('bf5');
            $table->string('bf6');
            $table->string('bf7');
            $table->string('bf8');
            $table->string('bf9');

            $table->string('menu1');
            $table->string('menu2');
            $table->string('menu3');
            $table->string('menu4');

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
        Schema::dropIfExists('homeimages');
    }
}
