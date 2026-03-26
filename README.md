# BERANGKATIN - Sistem Informasi Tiket Kereta Api

**BERANGKATIN** adalah aplikasi web berbasis Laravel yang dirancang untuk memberikan solusi cerdas dalam reservasi tiket kereta api.

---

##  Fitur Utama & Kriteria Teknis

Proyek ini dibangun dengan memenuhi standar pengembangan web Laravel modern:

###  1. Struktur Layout Blade (Mastering)
Mengimplementasikan teknik **Template Inheritance** untuk memisahkan struktur utama dengan konten spesifik.
* **Master Layout:** `resources/views/layouts/app.blade.php` sebagai *parent file*.
* **`@yield('content')`**: Placeholder dinamis untuk menyisipkan konten dari halaman anak.
* **`@extends('layouts.app')`**: Digunakan pada `home.blade.php` untuk mewarisi kerangka utama aplikasi.

###  2. Komponen Modular (@include)
Menerapkan konsep **DRY (Don't Repeat Yourself)** dengan memisahkan bagian UI yang berulang ke dalam folder `partials/`:
* `@include('partials.navbar')`: Navigasi utama dengan efek *Glassmorphism*.
* `@include('partials.footer')`: Informasi hak cipta dan profil pengembang.

###  3. Desain Responsif & Banner Fullscreen
Antarmuka pengguna yang adaptif menggunakan **Bootstrap 5.3**:
* **Hero Section:** Banner fullscreen (`100vh`) yang memastikan visual tetap proporsional di semua ukuran layar.
* **Warna Identitas:** Perpaduan harmonis antara *Deep Blue* (`#2d2a70`) dan *Vibrant Orange* (`#ed6b23`).
* **Grid System:** Menggunakan `row` dan `col-md-3` untuk tata letak fitur yang rapi di desktop dan fleksibel di perangkat mobile.

###  4. Pengolahan Data Dinamis
Menampilkan informasi secara efisien melalui integrasi Controller dan Blade:
* `{{ $variable }}`: Digunakan untuk mencetak data string secara aman.
* `@foreach`: Melakukan iterasi pada data array (seperti daftar fitur sistem) untuk penyajian data yang dinamis.

---

## 📂 Struktur Folder Blade
Berikut adalah organisasi file template pada proyek ini:

```text
resources/views/
├── layouts/
│   └── app.blade.php        <-- Master Layout (Parent)
├── partials/
│   ├── navbar.blade.php     <-- Modular Component (Nav)
│   └── footer.blade.php     <-- Modular Component (Footer)
└── home.blade.php           <-- Main Content (Child)
```

Footer Dan Navbar
<img width="1896" height="867" alt="image" src="https://github.com/user-attachments/assets/905b7d71-2186-44ab-913c-35c4b5de532f" />
<img width="1896" height="868" alt="image" src="https://github.com/user-attachments/assets/c8279ec9-fcbc-4998-9012-260bc56a66af" />
<img width="1896" height="530" alt="image" src="https://github.com/user-attachments/assets/e8e68493-0c37-4480-9f1b-fdd0152cdde6" />

