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
        Schema::create('opcoes_questoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('questao_id')->constrained('questoes_avaliacoes')->onDelete('cascade');
            $table->text('texto_opcao');
            $table->boolean('correta')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcoes_questoes');
    }
};
