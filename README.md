# Laravel 10 Starterkit
Starter project Laravel 10 dengan plugin populer untuk membangun aplikasi modern dengan fitur lengkap seperti autentikasi, logging, auditing, image handling, Excel export/import, dan debugging.

🔧 Fitur dan Plugin

Plugin	Deskripsi
Spatie Permission	Role & permission management
Spatie Activitylog	Log aktivitas pengguna
OwenIt Laravel Auditing	Riwayat perubahan data
Intervention Image	Manipulasi gambar
Maatwebsite Excel	Import/export Excel & CSV
Laravel Telescope	Debugging tool Laravel
UUID Primary Keys	Semua tabel menggunakan UUID

🗂 Struktur Migrasi yang Disiapkan
siteconfigs – Konfigurasi umum situs

articles – Artikel/konten

comments – Komentar artikel

reviews – Testimoni atau ulasan

banners – Banner promosi

galleries – Galeri gambar

contactus – Formulir kontak

🛠️ Instalasi

git clone <repo-url>

cd your-project-name
composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan telescope:install

🧪 Testing
Belum termasuk pengujian. Tambahkan PHPUnit & Pest sesuai kebutuhan proyek.

✨ Tips Tambahan
Gunakan trait HasUuids pada setiap model agar otomatis mengisi kolom UUID.

Tambahkan seeding untuk roles, permissions, dan users jika perlu autentikasi awal.

Gunakan middleware role dan permission dari Spatie untuk mengamankan route.
