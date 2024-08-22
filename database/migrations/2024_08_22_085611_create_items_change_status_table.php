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
        Schema::create('items_change_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id');
            $table->bigInteger('status_id');
            $table->bigInteger('status_action_id');
            $table->bigInteger('resolver');
            $table->bigInteger('created_by');
            $table->longText('comments');
            $table->dateTime('create_at');
            $table->enum('email_type', ['simple_e-mail', 'internal_interactive_e-mail'])->nullable();
            $table->enum('type_to', ['to', 'cc', 'bcc'])->nullable();
            $table->bigInteger('subject')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('get_a_copy')->nullable();
            $table->boolean('request_an_acknowledgment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_change_status');
    }
};
