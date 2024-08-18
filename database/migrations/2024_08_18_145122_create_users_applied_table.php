<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users_applied', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('town');
            $table->string('country');
            $table->string('postcode');
            $table->string('dial_code');
            $table->string('phone');
            $table->string('email');
            $table->boolean('is_over_16');
            $table->boolean('is_eligible_to_work_in_eu');
            $table->text('eligibility_details')->nullable();
            $table->boolean('has_criminal_convictions');
            $table->text('conviction_details')->nullable();
            $table->string('role_advertised_source')->nullable();
            $table->foreignId('vacancy_id')->constrained()->onDelete('restrict');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_applied');
    }
};
