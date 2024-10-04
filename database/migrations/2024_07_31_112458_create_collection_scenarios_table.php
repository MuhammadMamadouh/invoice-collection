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
        Schema::create('collection_scenarios', function (Blueprint $table) {
            $table->id();
            $table->string('en_name');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_pre_defined')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_scenarios');
    }
};
