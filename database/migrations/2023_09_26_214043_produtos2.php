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
        Schema::create("produtos", function(Blueprint $table){
            $table->id();
            $table->string('nome', 222);
            $table->text('descricao')->nullable();
            $table->string('marca', 222);
            $table->integer('estoque');
            $table->float('preco');
            $table->string('imagem', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
