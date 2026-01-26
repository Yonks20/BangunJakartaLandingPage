<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Kita hardcode datanya dulu biar ga error view-nya
    $features = [
        ['title' => 'Hitung RAB', 'icon' => 'fas fa-calculator', 'desc' => 'Estimasi biaya konstruksi.'],
        ['title' => 'Tukang Pro', 'icon' => 'fas fa-hard-hat', 'desc' => 'Cari tenaga kerja.'],
        ['title' => 'Harga Material', 'icon' => 'fas fa-cubes', 'desc' => 'Cek harga pasar.'],
    ];
    
    // Manggil file 'landing.blade.php'
    return view('landing', compact('features'));
});