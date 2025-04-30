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
        Schema::create('table_galleries', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('Primary UUID key');
            $table->string('title')->comment('Gallery title');
            $table->string('image')->comment('Gallery image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_galleries');
    }
};
