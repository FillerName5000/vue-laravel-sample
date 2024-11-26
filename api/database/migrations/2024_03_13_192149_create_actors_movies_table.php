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
        Schema::create('actors_movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('movie_id')->constrained(table: 'movies', indexName: 'id')->cascadeOnUpdate();
            $table->foreignId('actor_id')->constrained(table: 'people', indexName: 'id')->cascadeOnUpdate();
            $table->string('character');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors_movies');
    }
};
