<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_form', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->string('company_name');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('town');
            $table->string('county');
            $table->string('postcode');
            $table->string('dial_code');
            $table->string('phone');
            $table->string('email');
            $table->string('product_name');
            $table->text('description_product');
            $table->text('description_business');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_form');
    }
};
