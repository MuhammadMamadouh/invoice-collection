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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');//
            $table->string('last_name');//
            $table->boolean('active');
            $table->string('email')->unique();
            $table->string('phone')->nullable();//
            $table->string('function')->nullable();
            $table->foreignId('role_id')->constrained('roles');
            $table->string('picture')->nullable();//
            $table->string('fax')->nullable();
            $table->string('id_number')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
