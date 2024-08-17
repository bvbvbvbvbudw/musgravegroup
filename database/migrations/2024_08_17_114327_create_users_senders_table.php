<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSendersTable extends Migration
{
    public function up()
    {
        Schema::create('users_senders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('forenames');
            $table->string('surname');
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->json('preferred_categories')->nullable();
            $table->json('preferred_locations')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_senders');
    }
}
