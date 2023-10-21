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
            $table  ->integer("external_id");
            $table ->integer("imdb_id")->nullable();
            $table ->string("backdrop_path")->nullable();
            $table ->json("genres")->nullable();
            $table ->integer("budget")->nullable();
            $table ->string("original_language")->nullable();
            $table ->string("original_title")->nullable();
            $table ->text("overview")->nullable();
            $table ->string("poster_path")->nullable();
            $table ->json("production_companies")->nullable();
            $table ->float("popularity")->nullable();
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
