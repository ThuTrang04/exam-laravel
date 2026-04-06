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
        Schema::create('t_food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->integer('price')->default(0);
            $table->integer('old_price')->nullable();
            $table->text('description')->nullable();
            $table->string('sodium')->nullable();
            $table->string('fiber')->nullable();
            $table->string('vitamin_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_food');
    }
};
