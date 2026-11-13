<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penghuni_id')->constrained('penghunis')->cascadeOnDelete();
            $table->foreignId('kamar_id')->nullable()->constrained('kamars')->nullOnDelete();
            $table->string('judul', 150);
            $table->enum('kategori', ['kamar', 'kamar_mandi', 'listrik', 'air', 'wifi', 'kebersihan', 'lainnya'])->default('lainnya');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->enum('status', ['diajukan', 'diproses', 'selesai', 'ditolak'])->default('diajukan');
            $table->text('tanggapan')->nullable();
            $table->foreignId('ditangani_oleh')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('tanggal_selesai')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
