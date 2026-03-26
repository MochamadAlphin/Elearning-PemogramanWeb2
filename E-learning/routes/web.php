<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Data dinamis yang akan dikirim ke Blade
    $data = [
        'title' => 'Berangkatin - Pesan Tiket Kereta Lebih Mudah',
        'description' => 'Sistem informasi pemesanan tiket kereta api terpercaya untuk perjalanan Anda.',
        'features' => [
            'Pemesanan Cepat & Real-time',
            'Pembayaran Aman & Terverifikasi',
            'Rute Terlengkap Seluruh Indonesia',
            'Dukungan Pelanggan 24/7'
        ]
    ];

    return view('landing', $data);
});