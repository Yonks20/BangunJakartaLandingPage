<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Simulasi data fitur (seperti di referensi)
        $features = [
            ['title' => 'Hitung RAB', 'icon' => 'fas fa-calculator', 'desc' => 'Estimasi biaya konstruksi secara cepat dan akurat.'],
            ['title' => 'Tukang Bersertifikat', 'icon' => 'fas fa-hard-hat', 'desc' => 'Temukan tenaga kerja profesional di Jakarta.'],
            ['title' => 'Harga Material', 'icon' => 'fas fa-cubes', 'desc' => 'Update harga standar material konstruksi terkini.'],
        ];

        // Simulasi data berita/edukasi
        $news = [
            ['title' => 'Jadwal Pelatihan Konstruksi', 'date' => '25 Jan 2026', 'category' => 'Pelatihan'],
            ['title' => 'Webinar K3 Konstruksi', 'date' => '28 Jan 2026', 'category' => 'Webinar'],
            ['title' => 'Kompetisi Tenaga Kerja', 'date' => '01 Feb 2026', 'category' => 'Event'],
        ];

        return view('landing', compact('features', 'news'));
    }
}