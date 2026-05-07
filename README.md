# 📚 Webstore - Platform Toko Buku & Literatur Digital Modern

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-ring&logo=laravel)](https://laravel.com)
[![Livewire Version](https://img.shields.io/badge/Livewire-3.x-4E56A6?style=flat-ring&logo=livewire)](https://livewire.laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4.0-38BDF8?style=flat-ring&logo=tailwind-css)](https://tailwindcss.com)
[![Filament PHP](https://img.shields.io/badge/Filament-v3.x-F59E0B?style=flat-ring&logo=laravel)](https://filamentphp.com)

Selamat datang di **Webstore**, sebuah platform e-commerce toko buku modern yang dirancang khusus untuk mempertemukan para pencinta literatur dengan buku-buku terbaik pilihan mereka. Dari novel fiksi, buku pengembangan diri, hingga karya sastra digital terbaru, Webstore hadir sebagai ruang baca dan belanja digital yang indah, reaktif, dan premium.

---

## 🖥️ Tampilan Webstore

Berikut adalah antarmuka asli dari platform **Webstore**:

![Webstore Screenshot](public/images/webstore_screenshot.png)

*Antarmuka beranda Webstore dengan banner promosi interaktif **Big Book Sale** dan jajaran **Feature Product** yang menarik.*

---

## 🎯 Webstore Ini Untuk Apa?

**Webstore** dibangun untuk mengatasi kejenuhan belanja buku online yang lambat dan kaku. Platform ini menyederhanakan seluruh alur pembelian buku menjadi pengalaman yang menyenangkan bagi pembeli, sekaligus memberikan kontrol penuh bagi pemilik toko buku.

### 🌟 Bagi Pembaca & Pembeli Buku:
- **Eksplorasi Buku Tanpa Batas**: Telusuri katalog buku dengan pencarian instan berdasarkan judul, penulis, genre, atau tag promosi kustom.
- **Keranjang Belanja Reaktif**: Tambahkan, ubah jumlah, atau hapus buku pilihan Anda dari keranjang belanja secara langsung tanpa perlu menunggu halaman dimuat ulang (*zero-reload interface*).
- **Pengiriman Cerdas Seluruh Indonesia**: Pilih tujuan provinsi dan kota Anda, lalu sistem akan secara otomatis menghitung ongkos kirim real-time dari berbagai kurir terpercaya (JNE, J&T, SiCepat, dll.).
- **Alur Checkout yang Intuitif**: Pengisian formulir pesanan multi-langkah yang bersih, aman, dan mudah dipahami bahkan oleh pengguna awam.
- **Notifikasi Pelacakan Real-Time**: Pembeli otomatis menerima email konfirmasi pesanan, info nomor resi pengiriman, hingga notifikasi saat buku telah sampai di tujuan.

### 💼 Bagi Pemilik Toko & Admin (Back-Office):
- **Dasbor Manajemen Terpusat**: Mengelola katalog buku, stok inventaris, kategori genre, dan halaman informasi statis dengan mudah melalui panel admin yang elegan.
- **Pelacakan Status Pesanan Akurat**: Memantau siklus hidup pesanan penjualan secara aman, mulai dari pembayaran masuk, proses pengemasan, penginputan nomor resi, hingga pesanan selesai atau dibatalkan.
- **Otomatisasi Mutasi Bank**: Konfirmasi pembayaran instan menggunakan integrasi sistem webhook Moota yang memverifikasi transaksi pelanggan tanpa perlu memeriksa mutasi secara manual.

---

## 💎 Fitur Unggulan Produk

- **Visual Premium & Responsif**: Menggunakan prinsip desain modern dengan gradien halus, tipografi elegan dari Google Fonts, micro-animations, serta dukungan mode responsif penuh untuk ponsel dan tablet.
- **Sistem Promosi Fleksibel**: Banner promosi dinamis (seperti *"Big Book Sale up to 50% off"*) yang langsung menarik perhatian pelanggan sejak pertama kali membuka situs.
- **Keamanan Transaksi Tinggi**: URL konfirmasi pesanan yang unik dan terproteksi menggunakan ID yang di-samarkan (*obfuscated transaction ID*) demi privasi pembeli.

---

## 🚀 Cara Memulai (Instalasi Cepat)

Ingin mencoba menjalankan Webstore di komputer lokal Anda? Ikuti langkah-langkah mudah berikut:

### 1. Dapatkan Source Code & Instal Dependensi
```bash
# Clone repository ini
git clone <url-repository-anda>
cd webstore

# Instal paket PHP & aset Frontend
composer install
npm install
```

### 2. Atur Environment (.env)
Buat file konfigurasi `.env` dan generates kunci keamanan aplikasi:
```bash
cp .env.example .env
php artisan key:generate
```
*Buka file `.env` dan sesuaikan pengaturan database Anda (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).*

### 3. Migrasi & Pengisian Data Wilayah
Jalankan migrasi database serta seeder untuk mengisi data awal wilayah pengiriman Indonesia:
```bash
php artisan migrate --seed
```

### 4. Jalankan Aplikasi dengan Satu Perintah! ⚡
Proyek ini dilengkapi dengan perintah utilitas khusus untuk menjalankan seluruh ekosistem pengembangan secara bersamaan (Server Web, Pemroses Email Antrean, dan Penyusun Aset CSS/JS):
```bash
composer dev
```
Buka **`http://127.0.0.1:8000`** di peramban Anda untuk mulai menjelajahi dunia buku Webstore!

---

<details>
<summary>🛠️ <b>INFORMASI TEKNIS & DETIL FRAMEWORK (Khusus Developer)</b></summary>

### Tech Stack Utama
- **Backend Framework**: Laravel 12.x
- **Frontend Engine**: Livewire 3.x, Alpine.js, Vanilla Calendar Pro
- **Styling**: Tailwind CSS v4.0, Preline UI v3.x
- **Real-time Server**: Laravel Reverb & Echo (WebSockets)
- **Admin Panel**: Filament v3 (dengan Filament Shield untuk hak akses & Filament Breezy untuk profil)

### Alur Siklus Status Pesanan (Sales Order State Machine)
Status pesanan dikelola secara ketat menggunakan `spatie/laravel-model-states` untuk menghindari inkonsistensi data:
```
[Pending] ───(Pembayaran Masuk / Konfirmasi)───> [Progress] ───(Resi Diinput & Terkirim)───> [Completed]
    │                                              │
    └───(Pembatalan Transaksi / Kadaluwarsa)───────┴───(Kendala Pengiriman)───────────> [Cancel]
```

### Sistem Antrean & Notifikasi Event-Driven
Mengirimkan email secara asinkron menggunakan antrean database (*queue*) saat terjadi perubahan status pesanan:
1. **`SalesOrderCreatedEvent`** ➔ Mengirim email konfirmasi pesanan & membuat tautan pembayaran.
2. **`SalesOrderProgressedEvent`** ➔ Mengirim email notifikasi bahwa buku sedang dikemas dan diproses.
3. **`ShippingReceiptNumberUpdateEvent`** ➔ Mengirim email berisi nomor resi pengiriman asli untuk pelacakan pembeli.
4. **`SalesOrderCompletedEvent`** ➔ Mengirim email penutup ucapan terima kasih atas selesainya transaksi.
5. **`SalesOrderCancelledEvent`** ➔ Mengirim email pemberitahuan pembatalan pesanan beserta alasannya.

### Rute Web Aktif
- `/` - Beranda (HomePage)
- `/products` - Katalog Produk (ProductCatalog)
- `/product/{slug}` - Detail Buku (ProductController)
- `/cart` - Keranjang Belanja (Cart)
- `/checkout` - Formulir Pembelian (Checkout)
- `/order-confirmed/{trx_id}` - Konfirmasi & Ringkasan Pesanan (SalesOrderDetail)
- `/page/{slug}` - Halaman Informasi Statis (PageStatic)
- `/admin` - Dasbor Admin Filament
- `/moota/callback` - Webhook Otomatisasi Pembayaran Moota
</details>

---


