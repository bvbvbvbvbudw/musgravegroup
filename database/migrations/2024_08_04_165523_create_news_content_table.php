<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsContentTable extends Migration
{
    public function up()
    {
        Schema::create('news_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->constrained('news')->onDelete('cascade');
            $table->foreignId('news_sustainability_id')->nullable()->constrained('news_sustainabilities')->onDelete('cascade');
            $table->boolean('is_standard')->nullable()->default(true);
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_contents');
    }
}
