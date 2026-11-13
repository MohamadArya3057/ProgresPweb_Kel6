<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnDelete();
            $table->foreignId('kamar_id')->nullable()->constrained('kamars')->nullOnDelete();
            $table->string('nik', 16)->unique();
            $table->text('alamat_asal');
            $table->string('pekerjaan', 100)->nullable();
            $table->string('nama_kontak_darurat', 100);
            $table->string('no_kontak_darurat', 20);
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penghunis');
    }
};
