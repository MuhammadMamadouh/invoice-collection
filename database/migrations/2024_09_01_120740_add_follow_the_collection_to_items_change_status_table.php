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
        Schema::table('items_change_status', function (Blueprint $table) {
            $table->boolean('follow_the_collection_scenario')->default(0);
            $table->boolean('create_a_specific_action')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items_change_status', function (Blueprint $table) {
            $table->dropColumn(['follow_the_collection_scenario', 'create_a_specific_action']);
        });
    }
};
