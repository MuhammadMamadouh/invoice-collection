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
        Schema::create('temp_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->date('action_date');
            $table->string('action_type');
            $table->bigInteger('collection_scenario_id')->nullable();
            $table->bigInteger('client_id');
            $table->bigInteger('item_id');
            $table->bigInteger('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_actions');
    }
};
