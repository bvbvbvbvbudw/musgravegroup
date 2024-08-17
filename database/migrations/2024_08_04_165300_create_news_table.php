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
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('restrict');
            $table->text('small_description');
            $table->boolean('is_popular')->default(false);
            $table->foreignId('media_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
