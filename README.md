# Modul Katalog Farmasi — Sistem Informasi Klinik Rawat Jalan

Repository individu Tugas Besar mata kuliah **Pengembangan Aplikasi Website (PAW)**.

## Identitas Mahasiswa
- **Nama:** Najwan Arkaan Setiawan
- **NIM:** 102022500193
- **Kelas:** SI-49-08
- **Kelompok:** SK02 — Klinik Rawat Jalan
- **Modul:** Individu C — Katalog Farmasi

## Fitur Utama
- **Autentikasi:** Login, Logout, dan pembatasan percobaan login (`throttle:20,1`).
- **Role-Based Authorization (`RoleMiddleware`):**
  - `admin`: Akses penuh (Lihat, Detail, Tambah, Edit, Hapus data obat).
  - `user`: Hanya dapat melihat daftar dan detail katalog obat (akses ke rute `/admin/*` diblokir dengan HTTP `403 Forbidden`).
- **CRUD Katalog Farmasi:** Pengelolaan nama obat, kategori, sediaan, pabrikan, harga, dan stok menggunakan Eloquent ORM Laravel dan Bootstrap 5.
- **Database Migration & Seeder:** Otomatis membuat tabel `users` dan `obats` beserta akun dan data awal obat.

## Akun Demo (Seeder)
| Role | Username | Password |
| :--- | :--- | :--- |
| Admin | `admin` | `password` |
| User | `user` | `password` |

## Cara Menjalankan di Lokal
1. Clone repository ini:
   ```bash
   git clone [https://github.com/najwanars/PAW_49-08_KatalogFarmasi_Najwan.git](https://github.com/najwanars/PAW_49-08_KatalogFarmasi_Najwan.git)
   cd PAW_49-08_KatalogFarmasi_Najwan
   ```
2. Install dependensi:
   ```bash
   composer install
   ```
3. Salin `.env.example` menjadi `.env`, buat database kosong bernama `db_klinik` di phpMyAdmin, lalu jalankan:
   ```bash
   php artisan key:generate
   php artisan migrate:fresh --seed
   php artisan serve
   ```
4. Akses aplikasi di `http://127.0.0.1:8000`.
