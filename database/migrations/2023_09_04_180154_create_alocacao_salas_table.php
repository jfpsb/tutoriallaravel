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
        Schema::create('alocacao_salas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sala');
            $table->unsignedBigInteger('componente_curricular');
            $table->string('periodo_ano');
            $table->string('periodo_semestre');
            $table->string('horario_inicio');
            $table->string('horario_fim');
            $table->string('dias_semana');
            $table->timestamps();

            $table->foreign('sala')->references('id')->on('salas');
            $table->foreign('componente_curricular')->references('id')->on('componentes_curriculares');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alocacao_salas');
    }
};
