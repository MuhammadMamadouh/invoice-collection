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
        Schema::create('score_criterias', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->smallInteger('weight');
            $table->string('answer');
            $table->bigInteger('score_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_criterias');
    }
};
