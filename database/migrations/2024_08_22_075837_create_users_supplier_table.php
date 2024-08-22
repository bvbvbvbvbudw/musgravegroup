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
        Schema::create('users_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->nullable();
            $table->string('company_name')->nullable();
            $table->text('business_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('is_contact')->nullable();
            $table->text('tell_about')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_type')->nullable();
            $table->text('description_few')->nullable();
            $table->text('manufacturing_your_product')->nullable();
            $table->string('product_made')->nullable();
            $table->string('market_place')->nullable();
            $table->text('products_similar')->nullable();
            $table->string('product_fit')->nullable();
            $table->text('additional_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_supplier');
    }
};
