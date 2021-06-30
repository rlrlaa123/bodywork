<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMenuLinkInHomeimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeimages', function (Blueprint $table) {
            $table->string('menu1_link')->nullable();
            $table->string('menu2_link')->nullable();
            $table->string('menu3_link')->nullable();
            $table->string('menu4_link')->nullable();
            $table->string('video')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homeimages', function (Blueprint $table) {
            $table->dropColumn('menu1_link');
            $table->dropColumn('menu2_link');
            $table->dropColumn('menu3_link');
            $table->dropColumn('menu4_link');
            $table->dropColumn('video');
        });
    }
}
