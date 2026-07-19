<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->unsignedBigInteger('autor_id')->after('paginas');
            $table->unsignedBigInteger('categoria_id')->after('autor_id');
        });
    }

    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropColumn(['autor_id', 'categoria_id']);
        });
    }
};
