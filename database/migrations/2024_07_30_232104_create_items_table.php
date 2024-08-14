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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_type_id');
            $table->bigInteger('company_id');
            $table->string('po_no');
            $table->string('file_no');
            $table->string('trans_no');
            $table->string('erp_item_type');
            $table->string('business_case');
            $table->string('sales_manager');
            $table->string('sales_administrative');
            $table->string('customer_custom_field_1');
            $table->string('customer_custom_field_2');
            $table->date('order_date');
            $table->date('issue_date');
            $table->date('due_date');
            $table->date('payment_date');
            $table->bigInteger('currency_id');
            $table->decimal('initial_amount_exc_tax', 10, 2);
            $table->decimal('initial_amount_inc_tax', 10, 2);
            $table->decimal('remaining_amount_exc_tax', 10, 2);
            $table->decimal('remaining_amount_inc_tax', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
