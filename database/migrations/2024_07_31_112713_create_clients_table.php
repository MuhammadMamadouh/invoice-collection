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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_code');
            $table->string('trading_name')->nullable();
            $table->string('legal_id')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('business_line')->nullable();
            $table->foreignId('collector_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('collection_scenario_id')->constrained('collection_scenarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('post_office_box')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('payment_mean')->nullable();
            $table->decimal('insurer_guarantee', 10, 2)->nullable();
            $table->decimal('other_guarantees', 10, 2)->nullable();
            $table->decimal('credit_limit', 10, 2)->nullable();
            $table->boolean('late_payment_penalties')->default(false);
            $table->boolean('recovery_cost')->default(false);
            $table->boolean('interactive_emails')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
