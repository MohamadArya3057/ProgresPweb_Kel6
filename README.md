# FauzanKos

**Sistem Informasi Manajemen Kos Fauzan Hostel Berbasis Website**

Project akhir mata kuliah Pemrograman Berbasis Website, Program Studi Informatika, Fakultas Ilmu Komputer, Universitas Jember. Dikerjakan oleh **Kelompok 6**.

---

## 1. Fungsi Website

FauzanKos adalah aplikasi web untuk membantu pengelolaan operasional Kos Fauzan Hostel secara digital, meliputi pengelolaan data kamar, data penghuni, pembayaran sewa, dan pengaduan fasilitas kos.

Website memiliki dua jenis pengguna:

| Pengguna | Hak akses |
|---|---|
| **Admin** (pemilik/pengelola kos) | Mengelola data kamar, penghuni, pembayaran, dan pengaduan, serta melihat dashboard dan laporan |
| **Penghuni** | Melihat informasi kamar, memantau tagihan dan riwayat pembayaran, mengajukan pengaduan, dan memantau status pengaduan |

## 2. Teknologi

- Backend: Laravel
- Database: MySQL
- Frontend: Bootstrap 5, JavaScript, jQuery
- Konsep yang dipakai: Routing, Middleware, Migration, Seeder, Eloquent ORM dan relationship, Form Request validation, Blade layout

## 3. Pembagian Modul per Anggota

| No | Nama | NIM | Modul |
|---|---|---|---|
| 1 | Felix Sanders Herman's M | 252410103066 | Modul 1 - Autentikasi dan Penghuni |
| 2 | Mohamad Arya Fahreza H. | 242410103057 | Modul 2 - Kamar dan Dashboard |
| 3 | Jahrul Qoiq Assyafi'i | 252410103086 | Modul 3 - Pembayaran |
| 4 | Firdhan Andhika | 252410103065 | Modul 4 - Pengaduan |

## 4. Pembagian Fitur per Anggota

### Modul 1 - Autentikasi dan Penghuni

- Login dan logout
- Middleware pembatasan halaman berdasarkan role admin dan penghuni
- CRUD data penghuni: nama, NIK, alamat asal, pekerjaan, kontak darurat, tanggal masuk, dan tanggal keluar
- Penempatan penghuni ke kamar serta pengubahan status aktif/nonaktif
- Penghuni melihat dan mengedit profil sendiri
- Pencarian dan filter data penghuni
- Laporan jumlah penghuni aktif dan nonaktif serta daftar penghuni per kamar

### Modul 2 - Kamar dan Dashboard

- CRUD data kamar: nomor, tipe, harga per bulan, kapasitas, fasilitas, dan foto
- Pengelolaan status kamar: kosong, terisi, dan perbaikan
- Filter kamar berdasarkan status dan tipe
- Dashboard admin: jumlah kamar per status, penghuni aktif, total pembayaran bulan ini, tagihan belum lunas, dan pengaduan yang belum selesai
- Laporan kondisi kamar: tingkat hunian dan daftar kamar per status

### Modul 3 - Pembayaran

- CRUD tagihan sewa per penghuni berdasarkan periode bulan dan tahun
- Pencatatan pembayaran: tanggal, metode tunai atau transfer, dan unggah bukti bayar
- Status pembayaran: belum bayar, lunas, dan terlambat
- Penghuni melihat tagihan dan riwayat pembayaran
- Penanda tagihan yang melewati jatuh tempo
- Laporan pembayaran: filter bulan dan tahun, total pemasukan, daftar penghuni menunggak, serta opsi cetak atau ekspor PDF

### Modul 4 - Pengaduan

- Penghuni mengajukan pengaduan dengan judul, kategori, deskripsi, dan foto
- Kategori pengaduan meliputi listrik, air, Wi-Fi, kamar mandi, dan lainnya
- Penghuni memantau status pengaduan
- Admin melihat seluruh pengaduan, memperbarui status (diajukan, diproses, selesai, ditolak), dan memberikan tanggapan
- Filter pengaduan berdasarkan status dan kategori
- Laporan jumlah pengaduan per status dan kategori serta waktu penyelesaian

---

Kelompok 6
