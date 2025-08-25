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
        Schema::create('prova_concursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orgao_id')->constrained('orgaos')->onDelete('cascade');
            $table->foreignId('banca_id')->constrained('bancas')->onDelete('cascade');
            $table->string('cargo');
            $table->string('edital');
            $table->date('data_prova_concurso');
            $table->integer('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prova_concursos');
    }
};
