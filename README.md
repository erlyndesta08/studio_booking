# 📸 SnapStudio

# Latar Belakang

Di era digital saat ini, masyarakat membutuhkan kemudahan dalam melakukan pemesanan layanan secara online, termasuk jasa fotografi. Banyak studio foto masih menggunakan metode pemesanan manual melalui chat atau telepon sehingga proses reservasi menjadi kurang efisien.

SnapStudio dibuat sebagai solusi untuk mempermudah pelanggan dalam melihat informasi paket foto, melihat galeri hasil fotografi, serta melakukan booking studio secara online. Selain itu, sistem ini membantu admin dalam mengelola data booking dan paket studio secara lebih terstruktur.

---

# UI/UX

Konsep desain yang digunakan pada website SnapStudio adalah desain modern dan sederhana dengan tujuan memberikan pengalaman pengguna yang nyaman dan mudah digunakan.

Fitur antarmuka yang tersedia:

* Home Page dengan Hero Section
* Halaman Paket Studio
* Halaman Galeri Foto
* Form Booking Online
* Halaman Kontak
* Halaman Tentang Kami
* Dashboard Admin
* Kelola Booking
* Kelola Paket

Prinsip UI/UX yang diterapkan:

* Navigasi sederhana
* Tampilan responsif
* Warna konsisten
* Form yang mudah digunakan
* Informasi mudah ditemukan

---

# Deskripsi

SnapStudio adalah website studio fotografi yang dibuat menggunakan PHP dan MySQL untuk memudahkan pelanggan melakukan booking studio secara online.

Website ini menyediakan informasi paket foto, galeri hasil foto, kontak studio, serta panel admin untuk mengelola data booking dan paket.

---

# Fitur User

* Home
* Paket Studio
* Galeri Foto
* Booking Online
* Kontak
* Tentang Kami

---

# Fitur Admin

* Login Admin
* Dashboard
* Kelola Booking
* Kelola Paket
* Tambah Paket
* Edit Paket
* Hapus Paket
* Logout

---

# Teknologi

* HTML
* CSS
* Bootstrap 5
* PHP
* MySQL
* XAMPP
* phpMyAdmin

---

# Database

Nama Database:

studio_booking

Tabel yang digunakan:

### admin

* id
* username
* password

### booking

* id
* nama
* no_hp
* tanggal
* paket
* catatan

### paket

* id
* nama_paket
* harga
* deskripsi
* gambar

---

# Struktur Folder

```text
STUDIO_BOOKING
│
├── admin
├── assets
├── database
│   └── studio_booking.sql
│
├── index.php
├── paket.php
├── gallery.php
├── booking.php
├── kontak.php
├── about.php
├── koneksi.php
│
└── README.md
```

---

# Author

Nama : Erlyn Destantya

Mata Kuliah : Cloud Computing

Tahun : 2026
