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
        Schema::create('banners', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('Primary UUID key');
            $table->string('title')->comment('Banner title');
            $table->string('image')->comment('Banner image path');
            $table->string('link')->nullable()->comment('Optional redirect link');
            $table->boolean('active')->default(true)->comment('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
