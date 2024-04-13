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
        Schema::create('Produits', function (Blueprint $table) {
            $table->unsignedBigInteger('id_Produits')->primary();
            $table->string('nom');
            $table->float('Prix');
            $table->integer('Qantité');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Produits');
    }
};
