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
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('copy_in_the_automatic_email')->default(1);
            $table->string('phone')->unique()->nullable();
            $table->string('mobile_phone')->unique()->nullable();
            $table->string('fax')->unique()->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('contact_for_collection')->default(1);
            $table->bigInteger('client_id');
            $table->bigInteger('role_id')->nullable();
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
