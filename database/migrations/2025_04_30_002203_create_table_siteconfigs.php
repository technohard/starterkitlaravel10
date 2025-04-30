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
        Schema::create('siteconfigs', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('Primary UUID key');
            $table->string('key')->unique()->comment('Config key');
            $table->text('value')->nullable()->comment('Config value');
            $table->text('description')->nullable()->comment('Config description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siteconfigs');
    }
};
