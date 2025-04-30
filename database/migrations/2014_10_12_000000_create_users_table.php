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
            $table->uuid('id')->primary()->comment('Primary UUID key');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('picture')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('ip_address')->nullable();
            $table->rememberToken();
            $table->string('status')->comment('active,mute,suspend,blocked');
            $table->dateTime('status_expired')->nullable()->comment('date expired for mute , suspend');
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
