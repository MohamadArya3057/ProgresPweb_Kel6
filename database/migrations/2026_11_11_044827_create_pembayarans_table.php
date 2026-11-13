<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penghuni_id')->constrained('penghunis')->cascadeOnDelete();
            $table->unsignedTinyInteger('periode_bulan');
            $table->unsignedSmallInteger('periode_tahun');
            $table->unsignedInteger('jumlah');
            $table->date('jatuh_tempo');
            $table->date('tanggal_bayar')->nullable();
            $table->enum('metode', ['tunai', 'transfer'])->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->enum('status', ['belum_bayar', 'lunas', 'terlambat'])->default('belum_bayar');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->unique(['penghuni_id', 'periode_bulan', 'periode_tahun']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
