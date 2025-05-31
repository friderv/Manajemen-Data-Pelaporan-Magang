# Aplikasi Manajemen Data Pelaporan Magang

## Identitas
- Nama : Razian Sabri
- NIM  : 2308107010050

## Deskripsi Aplikasi
Aplikasi web berbasis Laravel untuk mengelola data pelaporan magang mahasiswa. Aplikasi ini memungkinkan pengguna untuk melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data laporan magang.

## Fitur Utama
- ✅ Create: Tambah data laporan magang baru
- ✅ Read: Tampilkan daftar dan detail laporan magang
- ✅ Update: Edit data laporan magang
- ✅ Delete: Hapus data laporan magang
- ✅ Validasi form input
- ✅ Interface yang user-friendly
- ✅ Database seeding untuk data dummy
  
## Teknologi yang Digunakan
- Laravel 11.x
- MySQL
- Bootstrap
- PHP 8.4.3
- Apache 2.4.62 VS17

## Cara Instalasi
### Prasyarat
- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Web server (Apache/Nginx)
### Langkah Instalasi
1. Jalankan composer install untuk mengunduh dan menginstall semua package yang diperlukan oleh aplikasi Laravel.
2. Copy file .env.example menjadi .env dengan perintah cp .env.example .env, lalu generate application key menggunakan php artisan key:generate.
3. Buka file .env dan atur koneksi database dengan isi DB_DATABASE dengan db_pelaporan_magang, DB_USERNAME dengan root, dan DB_PASSWORD dikosongkan.
4. Eksekusi php artisan migrate di terminal laragon untuk membuat tabel-tabel yang diperlukan berdasarkan file migration yang ada di project.
5. Eksekusi php artisan db:seed untuk mengisi database dengan data dummy yang sudah disiapkan.
6. Start aplikasi Laravel dengan php artisan serve dan akses melalui browser di alamat http://localhost:8000 atau dengan run di laragon.
