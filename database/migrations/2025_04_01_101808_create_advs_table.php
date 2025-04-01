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
    Schema::create('advs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image');
        $table->string('link')->nullable();
        $table->text('description')->nullable();
        $table->string('position')->default('sidebar');
        $table->dateTime('start_date');
        $table->dateTime('end_date');
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advs');
    }
};
