<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // vincula ao usuário logado
            $table->string('titulo');
            $table->string('autor')->nullable();
            $table->string('editora')->nullable();
            $table->year('ano')->nullable();
            $table->integer('paginas')->nullable();
            $table->string('imagem')->nullable();
            $table->enum('status', ['lido', 'lendo', 'quero ler', 'dropei'])->default('quero ler');
            $table->boolean('favorito')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
