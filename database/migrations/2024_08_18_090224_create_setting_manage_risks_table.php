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
        Schema::create('setting_manage_risks', function (Blueprint $table) {
            $table->id();
            $table->string('credit_insurance');
            $table->smallInteger('credit_limits_validity_duration');
            $table->smallInteger('alert_when_the_total_receivable_reaches');
            $table->smallInteger('grace_period');
            $table->smallInteger('time_limit_for_declaring');
            $table->decimal('amount_of_discretionary_limit', 10 ,2);
            $table->enum('days_compared', ['due_date', 'issued_date']);
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_manage_risks');
    }
};
