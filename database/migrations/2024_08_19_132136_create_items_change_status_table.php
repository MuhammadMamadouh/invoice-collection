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
            $table->string('file');
            $table->dateTime('create_at');
            $table->boolean('visible_in')->default(1);
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
