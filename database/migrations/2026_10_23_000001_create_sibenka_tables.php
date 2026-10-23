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
        // 1. Tabel Anggota Struktur Tim
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('division'); // 'Tim Development' atau 'Tim Dokumen & Laporan'
            $table->string('role')->nullable();
            $table->string('image_path')->nullable();
            $table->text('drive_url')->nullable();
            $table->integer('order_num')->default(1);
            $table->boolean('is_placeholder')->default(false);
            $table->timestamps();
        });

        // 2. Tabel Pengaturan Sistem Sibenka
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_title')->default('SISTEM SIBENKA');
            $table->string('badge_text')->default('Projek Kepemimpinan • Sibenka');
            $table->string('page_title')->default('STRUKTUR TIM');
            $table->text('page_subtitle')->nullable();
            $table->text('menu_subtitle')->nullable();
            $table->text('website_url');
            $table->longText('about_system');
            $table->longText('urgency_text');
            $table->integer('auto_return_seconds')->default(30);
            $table->timestamps();
        });

        // 3. Tabel Fitur Unggulan Sistem
        Schema::create('system_features', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->default('⚡');
            $table->string('title');
            $table->text('description');
            $table->integer('order_num')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_features');
        Schema::dropIfExists('system_settings');
        Schema::dropIfExists('team_members');
    }
};
