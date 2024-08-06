<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBrandsAndNewsTables extends Migration
{
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')->onDelete('restrict');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropForeign(['news_id']);
        });

        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['brand_id']);
        });
    }
}
