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
        Schema::create('setting_credit_validations', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('num_of_days');
            $table->enum('actions', ['validate', 'cancel']);
            $table->boolean('validation_of_lower_levels')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_credit_validations');
    }
};
