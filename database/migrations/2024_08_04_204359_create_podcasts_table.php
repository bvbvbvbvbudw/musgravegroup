<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('spotify')->nullable();
            $table->string('apple')->nullable();
            $table->string('buzz')->nullable();
            $table->text('small_description');
            $table->text('content');
            $table->foreignId('media_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
}
