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
         Schema::create('epis', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('tipo',100);
            $table->string('ca', 6);
            $table->string('fabricante', 100);
            $table->integer('quantidade');
            $table->date('validade');
            $table->string('status');

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epis');
    }
};
