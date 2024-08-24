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
        Schema::create('items_change_status_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('desc');
            $table->json('visiable_in');
            $table->bigInteger('items_change_status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_change_status_files');
    }
};
