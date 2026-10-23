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
        Schema::create('slideshow_media', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('original_name');
            $table->boolean('is_starred')->default(false);
            $table->float('duration_seconds', 4, 2)->default(0.20);
            $table->string('caption')->nullable();
            $table->integer('order_num')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slideshow_media');
    }
};

