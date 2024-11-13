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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id(); 
            $table->string('name', 100)->unique(); 
            $table->decimal('weight', 9, 2);
            $table->decimal('height', 9, 2); 
            $table->integer('evolution')->nullable();
            $table->enum('type', ['water', 'ground', 'rock', 'fire', 'grass', 'electric', 'psychic', 'ice', 'dragon', 'dark', 'fairy']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
