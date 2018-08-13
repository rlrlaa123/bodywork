<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('banner3')->nullable();

            $table->string('bf1')->nullable();
            $table->string('bf2')->nullable();
            $table->string('bf3')->nullable();
            $table->string('bf4')->nullable();
            $table->string('bf5')->nullable();
            $table->string('bf6')->nullable();
            $table->string('bf7')->nullable();
            $table->string('bf8')->nullable();
            $table->string('bf9')->nullable();
            $table->string('bf10')->nullable();
            $table->string('bf11')->nullable();
            $table->string('bf12')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
