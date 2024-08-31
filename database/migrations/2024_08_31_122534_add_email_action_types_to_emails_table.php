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
        Schema::table('emails', function (Blueprint $table) {
            $table->boolean('automatic_action')->nullable();
            $table->boolean('automatic_action_to_be_confirmed')->nullable();
            $table->boolean('internal_interactive_emailLink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emails', function (Blueprint $table) {
            $table->dropColumn(['automatic_action', 'automatic_action_to_be_confirmed', 'internal_interactive_emailLink']);
        });
    }
};
