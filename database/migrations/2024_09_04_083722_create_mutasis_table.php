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
        Schema::create('mutasi', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi')->nullable()->unique();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('pgol')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('instansi')->nullable();
            $table->string('no_hp')->nullable();
            $table->boolean('is_final')->default(false);
            $table->boolean('verified')->default(false);
            $table->enum('status',['draft', 'proses', 'diterima', 'ditolak', 'dibatalkan'])->default('draft');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasi');
    }
};
