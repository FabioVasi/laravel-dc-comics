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
        Schema::create('dc_comics', function (Blueprint $table) {
            $table->id();
            $table->string('thumb')->nullable();
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->decimal('price', 5, 2)->nullable();
            $table->string('series', 80)->nullable();
            $table->date('sale_date')->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dc_comics');
    }
};