# Sistem Informasi SMK

Aplikasi manajemen data sekolah berbasis web untuk SMK, dibangun dengan **Laravel**. Fokus utama aplikasi ini adalah **absensi digital**, lengkap dengan manajemen data siswa, guru, kelas, tahun ajaran, jadwal pelajaran, hingga rekap kehadiran yang bisa diekspor ke Excel.

## ✨ Fitur

- **Manajemen Data Master**
  - Data siswa, guru, kelas, dan tahun ajaran (dengan status tahun ajaran aktif)
  - Kenaikan kelas (promosi siswa) baik massal maupun terpilih
- **Jadwal Pelajaran**
  - Penjadwalan per kelas, guru, mata pelajaran, hari, dan jam pelajaran
- **Absensi Digital**
  - Guru mengisi absensi (hadir, sakit, izin, alpa) sesuai jadwal mengajarnya
  - Validasi otomatis: absensi hanya bisa diisi sesuai hari jadwal, tidak bisa untuk tanggal yang akan datang, dan baru terbuka saat jam pelajaran dimulai
  - Status real-time: *Belum diabsen*, *Belum lengkap*, *Sudah diabsen*, *Input terlambat*
- **Rekap Kehadiran**
  - Rekap per kelas per tahun ajaran, bisa difilter per mata pelajaran
  - Persentase kehadiran per siswa
  - Ekspor rekap ke file Excel (`.xlsx`)
- **Manajemen Akses Berbasis Role**
  - `admin` — akses penuh ke seluruh data master dan sistem
  - `guru` — mengisi absensi dan melihat jadwal mengajarnya sendiri
  - `kepala_sekolah` — akses ke rekap kehadiran (read-only)

## 🛠️ Teknologi

- [Laravel](https://laravel.com) 13
- PHP 8.3+
- SQLite (default) — bisa diganti ke MySQL/PostgreSQL lewat `.env`
- [Tailwind CSS](https://tailwindcss.com) + [Vite](https://vitejs.dev)
- [Maatwebsite Excel](https://laravel-excel.com) untuk ekspor rekap absensi

## 🚀 Instalasi

### Prasyarat

- PHP >= 8.3
- Composer
- Node.js & npm

### Langkah-langkah

```bash
# 1. Clone repository
git clone https://github.com/SidiqFatuh187/sistem-informasi-smk.git
cd sistem-informasi-smk

# 2. Install dependency PHP
composer install

# 3. Salin file environment
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Siapkan database SQLite (default)
touch database/database.sqlite

# 6. Jalankan migrasi (dan seeder jika tersedia)
php artisan migrate --seed

# 7. Install dependency frontend & build asset
npm install
npm run build

# 8. Jalankan server pengembangan
php artisan serve
```

Aplikasi bisa diakses di `http://localhost:8000`.

> Alternatif: gunakan `composer run dev` untuk menjalankan server Laravel, queue listener, dan Vite sekaligus dalam satu perintah.

## 📁 Struktur Direktori Penting

```
app/
├── Http/Controllers/     # Logic absensi, rekap, data master, dsb.
├── Http/Middleware/      # RoleMiddleware untuk kontrol akses
├── Models/               # Attendance, Schedule, Student, Teacher, dst.
└── Exports/              # Export rekap kehadiran ke Excel

database/migrations/      # Skema database (siswa, guru, kelas, absensi, jadwal)
resources/views/          # Tampilan Blade (absensi, rekap, data master)
routes/web.php            # Definisi routing & middleware role
```

## 🧪 Testing

```bash
composer test
```

## 📄 Lisensi

Proyek ini dirilis di bawah [Lisensi MIT](LICENSE).