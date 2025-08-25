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
        Schema::create('prova_textos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prova_concurso_id')->constrained('prova_concursos')->onDelete('cascade');
            $table->foreignId('prova_concurso_questaos_id')->constrained('prova_concurso_questaos')->onDelete('cascade');
            $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade');
            $table->text('texto_prova');
            $table->integer('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prova_textos');
    }
};
