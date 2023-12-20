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
        Schema::table('users', function (Blueprint $table) {
            // Modificar la columna existente y hacerla nulleable
            $table->string('password')->nullable(true)->change();
            $table->string('google_id')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nombre_tabla', function (Blueprint $table) {
            // Deshacer los cambios si es necesario
            $table->dropColumn('google_id');
        });
    }
};
