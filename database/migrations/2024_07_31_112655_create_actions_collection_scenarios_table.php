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
        Schema::create('collection_scenario_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->smallInteger('number_of_days');
            $table->string('action_type');
            $table->bigInteger('collection_scenario_id');
            $table->string('mail_subject')->nullable();
            $table->string('mail_content')->nullable();
            $table->string('language')->nullable();
            $table->boolean('is_automatic_action')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_scenario_actions');
    }
};
