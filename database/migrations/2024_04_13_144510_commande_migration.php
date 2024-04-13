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
            $table->foreign('id_utilisateur')->references('ID_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('id_fournisseur')->references('ID_fournisseur')->on('fournisseurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commande', function (Blueprint $table) {
            $table->dropForeign(['id_utilisateur']);
            $table->dropForeign(['id_fournisseur']);
        });
    }
};
