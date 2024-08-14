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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('copy_in_the_automatic_email')->default(1);
            $table->string('phone')->unique();
            $table->string('mobile_phone')->unique();
            $table->string('fax')->unique();
            $table->longText('comments');
            $table->boolean('contact_for_collection')->default(1);
            $table->bigInteger('client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
