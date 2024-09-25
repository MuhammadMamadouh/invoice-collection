<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->date('action_date');
            $table->string('action_type');
            $table->bigInteger('collection_scenario_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->bigInteger('created_by');
            $table->boolean('automatic_action')->default(0);
            $table->boolean('automatic_action_to_be_confirmed')->default(0);
            $table->boolean('internal_interactive_emailLink')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};