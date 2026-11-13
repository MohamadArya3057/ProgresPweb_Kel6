<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar', 10)->unique();
            $table->string('tipe', 50);
            $table->unsignedInteger('harga_per_bulan');
            $table->unsignedTinyInteger('kapasitas')->default(1);
            $table->text('fasilitas')->nullable();
            $table->enum('status', ['kosong', 'terisi', 'perbaikan'])->default('kosong');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
