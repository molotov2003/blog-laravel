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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('post_id'); // Agregar esta línea para la relación
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); // Agregar esta línea para la relación
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
