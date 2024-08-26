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
        Schema::table('items_change_status_files', function (Blueprint $table) {
            $table->bigInteger('file_size')->after('file_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items_change_status_files', function (Blueprint $table) {
            $table->dropColumn('file_size');
        });
    }
};
