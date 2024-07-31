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
        Schema::create('actions_collection_scenarios', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->smallInteger('number_of_days');
            $table->string('action_type');
            $table->foreignId('collection_scenarios_id')->constrained('collection_scenarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions_collection_scenarios');
    }
};
