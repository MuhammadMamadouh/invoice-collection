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
            $table->foreignId('item_type')->constrained('item_types')->onDelete('cascade'); // Foreign key to item_types table
            $table->string('Company_code');
            $table->string('PO_NO');
            $table->string('File_NO');
            $table->string('ERP_item_type');
            $table->string('Business_case');
            $table->string('Sales_manager');
            $table->string('Sales_adrninistative'); // Check if this should be 'Sales_administrative'
            $table->string('Customer_custom_field_1');
            $table->string('Customer_custom_field_2');
            $table->string('Order_date');
            $table->string('Issue_date');
            $table->string('Due_date');
            $table->string('Payment_date');
            $table->foreignId('Currency')->constrained('currencies')->onDelete('cascade'); // Foreign key to currencies table
            $table->string('Initial_amount_exc_Tax');
            $table->string('Initial_amount_inc_Tax');
            $table->string('Remaining_amount_exc_Tax');
            $table->string('Remaining_amount_inc_Tax');
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
