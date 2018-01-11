<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTenthuongmaiInTableChude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ChuDe', function (Blueprint $table) {
            $table->string('tenthuongmai', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ChuDe', function (Blueprint $table) {
            $table->dropColumn('tenthuongmai');
        });
    }
}
