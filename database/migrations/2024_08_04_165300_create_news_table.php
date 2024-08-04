<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('category');
            $table->text('small_description');
            $table->boolean('is_popular')->default(false);
            $table->foreignId('media_id')->constrained()->onDelete('cascade'); // Связь с таблицей медиа
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
