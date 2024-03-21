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
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description',5000);
            $table->string('image');
            $table->float('price');
            $table->time('date_open');
            $table->time('date_close');
            $table->string('location');
            $table->foreignId('id_category')->constrained('categories');
            $table->foreignId('id_owner')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salles');
    }
};
