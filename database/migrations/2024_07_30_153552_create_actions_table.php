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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('action_name');
            $table->date('action_date')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->bigInteger('action_type_id');
            $table->bigInteger('created_by');
            $table->bigInteger('collection_scenario_id')->nullable();
            // $table->bigInteger('predefined_collection_scenario_id')->nullable();
            $table->bigInteger('item_change_status_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            //$table->bigInteger('client_id')->nullable();
            $table->boolean('automatic_action')->default(0);
            $table->boolean('automatic_action_to_be_confirmed')->default(0);
            $table->boolean('internal_interactive_emailLink')->default(0);
            // $table->boolean('is_pre_defined')->default(0);
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
