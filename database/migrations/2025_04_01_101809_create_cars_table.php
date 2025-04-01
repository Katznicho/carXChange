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
    Schema::create('cars', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
        $table->foreignId('dealer_id')->constrained()->onDelete('cascade');
        $table->string('name');
        $table->string('slug')->unique();
        $table->string('brand');
        $table->string('model');
        $table->year('year');
        $table->decimal('price', 12, 2);
        $table->integer('mileage');
        $table->string('transmission');
        $table->string('fuel_type');
        $table->string('condition');
        $table->text('description')->nullable();
        $table->json('features')->nullable();
        $table->json('images')->nullable();
        $table->boolean('is_featured')->default(false);
        $table->boolean('is_sold')->default(false);
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
