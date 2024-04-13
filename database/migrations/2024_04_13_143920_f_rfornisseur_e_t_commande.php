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
        Schema::table('commande', function (Blueprint $table) {
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_fournisseur')->references('id_fournisseur')->on('fournisseurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commande', function (Blueprint $table) {
            $table->dropForeign(['id_fournisseur']);
            $table->dropColumn('id_fournisseur');
        });
    }
};
