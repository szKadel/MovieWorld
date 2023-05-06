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
        Schema::create('movies', function (Blueprint $table) {
            $table  ->id();
            $table ->integer("xml_id");
            $table ->integer("imdb_id");
            $table ->integer("budget");
            $table ->json("genres");
            $table ->json("production_companies");
            $table ->json("production_countries");
            $table ->json("spoken_languages");
            $table ->string("original_language");
            $table ->float("popularity");
            $table ->string("poster_path");
            $table  ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
