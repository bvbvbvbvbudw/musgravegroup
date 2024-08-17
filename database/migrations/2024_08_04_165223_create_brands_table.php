<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title');
            $table->text('small_description');
            $table->string('url');
            $table->foreignId('media_logo_id')->constrained('media')->onDelete('cascade');
            $table->foreignId('media_bg_id')->constrained('media')->onDelete('cascade');
            $table->unsignedBigInteger('news_id')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
