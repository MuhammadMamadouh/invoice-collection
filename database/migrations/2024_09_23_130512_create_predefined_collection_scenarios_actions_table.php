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
        Schema::create('predefined_collection_scenarios_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->smallInteger('number_of_days');
            $table->string('action_type');
            $table->foreignId('collection_scenario_id')->constrained('predefined_collection_scenarios')->cascadeOnDelete()->cascadeOnUpdate()->index();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predefined_collection_scenarios_actions');
    }
};
