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
        Schema::create('prova_concurso_questaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prova_concurso_id')->constrained('prova_concursos')->onDelete('cascade');
            $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade');
            $table->foreignId('prova_texto_id')->constrained('prova_textos')->onDelete('cascade');
            $table->integer('numero_questao');
            $table->text('enunciado_questao');
            $table->string('alternativa_a');
            $table->string('alternativa_b');
            $table->string('alternativa_c');
            $table->string('alternativa_d');
            $table->string('alternativa_e');
            $table->string('alternativa_correta');
            $table->integer('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prova_concurso_questaos');
    }
};
