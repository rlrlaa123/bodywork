<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinkColumnInHomeimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeimages', function (Blueprint $table) {
            $table->string('bf1_link')->nullable();
            $table->string('bf2_link')->nullable();
            $table->string('bf3_link')->nullable();
            $table->string('bf4_link')->nullable();
            $table->string('bf5_link')->nullable();
            $table->string('bf6_link')->nullable();
            $table->string('bf7_link')->nullable();
            $table->string('bf8_link')->nullable();
            $table->string('bf9_link')->nullable();
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
            $table->dropColumn('bf1_link');
            $table->dropColumn('bf2_link');
            $table->dropColumn('bf3_link');
            $table->dropColumn('bf4_link');
            $table->dropColumn('bf5_link');
            $table->dropColumn('bf6_link');
            $table->dropColumn('bf7_link');
            $table->dropColumn('bf8_link');
            $table->dropColumn('bf9_link');
        });
    }
}
