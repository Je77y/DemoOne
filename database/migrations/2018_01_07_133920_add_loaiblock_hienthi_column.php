<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoaiblockHienthiColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BlockContent', function (Blueprint $table) {
            $table->integer('loaiblockid');
            $table->boolean('hienthi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('BlockContent', function (Blueprint $table) {
            $table->dropColumn('loaiblockid');
            $table->dropColumn('hienthi');
        });
    }
}
