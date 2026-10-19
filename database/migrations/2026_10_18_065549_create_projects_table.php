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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('client_name');
        $table->string('category'); // Contoh: Gedung Komersial, Perumahan, Infrastruktur
        $table->string('location');
        $table->date('completion_date');
        $table->string('budget_range')->nullable();
        $table->enum('status', ['ongoing', 'completed'])->default('completed');
        $table->text('description');
        $table->string('thumbnail')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
