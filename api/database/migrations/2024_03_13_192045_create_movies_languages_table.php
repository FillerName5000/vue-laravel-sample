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
        Schema::create('movies_languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code', 2)->foreign('code')->constrained(table: 'languages', indexName: 'code');//foreignID was not happy
            $table->foreignId('movie_id')->constrained()->cascadeOnUpdate();
            $table->string('short_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_languages');
    }
};
