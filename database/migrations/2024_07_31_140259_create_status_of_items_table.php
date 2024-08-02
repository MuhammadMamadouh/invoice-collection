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
        Schema::create('status_of_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_of_status')->constrained('types_of_status')->onDelete('cascade'); // Foreign key to item_types table
            $table->string('status');
            $table->integer('follow_up_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_of_items');
    }
};
