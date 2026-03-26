A. Struktur Layout Blade (Mastering)
Proyek ini menggunakan teknik Template Inheritance. Struktur utama berada pada layouts/app.blade.php sebagai parent file yang menyediakan kerangka HTML.
@yield('content'): Digunakan untuk menyisipkan konten dinamis dari halaman anak.
@extends('layouts.app'): Digunakan pada home.blade.php untuk mewarisi struktur utama.

B. Komponen Modular (@include)
Untuk efisiensi kode dan kemudahan pemeliharaan (maintenance), bagian yang berulang dipisahkan ke dalam folder partials/:
@include('partials.navbar'): Memuat navigasi dengan efek Glassmorphism.
@include('partials.footer'): Memuat informasi hak cipta dan kontak.

C. Tampilan Responsif & Banner Fullscreen
Halaman utama menggunakan Hero Banner Fullscreen dengan tinggi 100vh. Hal ini memastikan gambar latar belakang (background1.jpg) menutupi seluruh layar pengguna di berbagai perangkat.
Warna Brand: Deep Blue (#2d2a70) dan Orange (#ed6b23).
Grid System: Menggunakan Bootstrap Grid (row, col-md-3) untuk memastikan fitur utama tersusun rapi di desktop dan bertumpuk secara vertikal di mobile.

D. Pengolahan Data Dinamis
Data fitur layanan dikirimkan melalui Controller dan ditampilkan menggunakan sintaks Blade:
{{ $variable }}: Untuk mencetak string.
@foreach: Untuk melakukan iterasi pada data array fitur sistem.

Footer Dan Navbar
<img width="1896" height="867" alt="image" src="https://github.com/user-attachments/assets/905b7d71-2186-44ab-913c-35c4b5de532f" />
<img width="1896" height="868" alt="image" src="https://github.com/user-attachments/assets/c8279ec9-fcbc-4998-9012-260bc56a66af" />
<img width="1896" height="530" alt="image" src="https://github.com/user-attachments/assets/e8e68493-0c37-4480-9f1b-fdd0152cdde6" />
