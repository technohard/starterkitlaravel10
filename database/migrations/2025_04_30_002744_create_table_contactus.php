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
        Schema::create('contactus', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('Primary UUID key');
            $table->string('name')->comment('Sender name');
            $table->string('email')->comment('Sender email');
            $table->string('subject')->comment('Subject line');
            $table->text('message')->comment('Message content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactus');
    }
};
