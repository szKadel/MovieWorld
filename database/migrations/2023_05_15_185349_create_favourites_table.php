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
        Schema::create('favourite_movie', function (Blueprint $table) {
            $table->id();
            $table->integer("imdb_id");
            $table->string("poster_path");
            $table->float("my_rate");
            $table->boolean("watch_list");
            $table->boolean("favourtie");
            $table->boolean("watched");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourites');
    }
};
