<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsSustainabilityTable extends Migration
{
    public function up()
    {
        Schema::create('news_sustainabilities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('restrict');
            $table->text('small_description');
            $table->foreignId('media_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_sustainabilities');
    }
}
