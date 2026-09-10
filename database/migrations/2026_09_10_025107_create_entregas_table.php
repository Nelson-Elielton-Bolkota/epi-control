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
        Schema::create('entregas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('funcionario_id')
            ->constrained('funcionarios')
            ->onDelete('cascade');

        $table->foreignId('epi_id')
            ->constrained('epis')
            ->onDelete('cascade');

        $table->integer('quantidade');
        $table->date('data_entrega');
        $table->date('data_devolucao')->nullable();
        $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
