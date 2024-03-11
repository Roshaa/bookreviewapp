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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->string('review'); 
            $table->unsignedTinyInteger('rating'); 
            $table->timestamps();

            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
            //A linha de cima faz o mesmo que as duas de baixo
            //$table->unsignedBigInteger('book_id');
            //$table = $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
