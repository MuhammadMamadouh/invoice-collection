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
        Schema::create('sent_emails', function (Blueprint $table) {
            $table->id();
            $table->enum('email_type', ['simple_e-mail', 'internal_interactive_e-mail']);
            $table->bigInteger('from');
            $table->enum('type_to', ['to', 'cc', 'bcc']);
            $table->bigInteger('subject');
            $table->longText('message');
            $table->string('file')->nullable();
            $table->boolean('get_a_copy')->default(0);
            $table->boolean('request_an_acknowledgment')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sent_emails');
    }
};
