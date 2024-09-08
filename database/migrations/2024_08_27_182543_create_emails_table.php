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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->bigInteger('resolver');
            $table->bigInteger('subject');
            $table->longText('message');
            $table->boolean('get_a_copy')->default(0);
            $table->boolean('request_an_acknowledgment')->default(0);
            $table->bigInteger('email_type')->nullable();
            $table->bigInteger('type_to')->nullable();
            $table->boolean('automatic_action')->nullable();
            $table->boolean('automatic_action_to_be_confirmed')->nullable();
            $table->boolean('internal_interactive_emailLink')->nullable();
            $table->morphs('emailable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
