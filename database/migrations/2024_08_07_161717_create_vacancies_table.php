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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('title');
            $table->text('type')->nullable();
            $table->text('contract_type');
            $table->date('end_date');
            $table->boolean('is_closed')->default(false);
            $table->foreignId('category_id')->constrained('vacancy_categories')->onDelete('restrict');
            $table->foreignId('location_id')->constrained('vacancy_locations')->onDelete('restrict');
            $table->foreignId('content_id')->constrained('vacancies_content')->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
