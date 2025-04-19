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
        $table->string('body_type')->nullable();
        $table->decimal('engine_size', 3, 1)->nullable();
        $table->integer('doors')->nullable();
        $table->integer('cylinders')->nullable();
        $table->json('color')->nullable();
        $table->string('vin')->nullable();
        $table->string('drive_type')->nullable();
        $table->string('video_url')->nullable();
        $table->integer('length')->nullable();
        $table->integer('width')->nullable();
        $table->integer('height')->nullable();
        $table->integer('wheelbase')->nullable();
        $table->integer('height_with_rails')->nullable();
        $table->integer('luggage_capacity_seats_up')->nullable();
        $table->integer('luggage_capacity_seats_down')->nullable();
        $table->integer('gross_weight')->nullable();
        $table->integer('max_loading_weight')->nullable();
        $table->integer('max_roof_load')->nullable();
        $table->integer('seats')->nullable();
        $table->integer('fuel_tank_capacity')->nullable();
        $table->integer('min_kerb_weight')->nullable();
        $table->integer('max_towing_weight_braked')->nullable();
        $table->integer('max_towing_weight_unbraked')->nullable();
        $table->integer('turning_circle')->nullable();
        $table->integer('width_with_mirrors')->nullable();
        $table->json('interior_features')->nullable();
        $table->json('exterior_features')->nullable();
        $table->json('safety_features')->nullable();
        $table->json('comfort_features')->nullable();
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
