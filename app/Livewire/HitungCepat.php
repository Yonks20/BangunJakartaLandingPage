<?php

namespace App\Livewire;

use Livewire\Component;

class HitungCepat extends Component
{
    // 1. Data yang disimpan (State)
    public $luas; 
    public $selectedModelId = 1; 

    // 2. Database Model Bangunan
    public $models = [
        1 => ['name' => 'Rumah Sederhana', 'price' => 5500000, 'icon' => 'fa-home', 'desc' => 'Rp 5.5 Jt / m²'],
        2 => ['name' => 'Rumah Menengah', 'price' => 7500000, 'icon' => 'fa-building', 'desc' => 'Rp 7.5 Jt / m²'],
        3 => ['name' => 'Rumah Mewah', 'price' => 12000000, 'icon' => 'fa-gem', 'desc' => 'Rp 12 Jt / m²'],
        4 => ['name' => 'Gedung 1 Lt', 'price' => 6500000, 'icon' => 'fa-warehouse', 'desc' => 'Rp 6.5 Jt / m²'],
        5 => ['name' => 'Gedung 2 Lt', 'price' => 8500000, 'icon' => 'fa-city', 'desc' => 'Rp 8.5 Jt / m²'],
        6 => ['name' => 'Gudang', 'price' => 4500000, 'icon' => 'fa-box', 'desc' => 'Rp 4.5 Jt / m²'],
    ];

    // 3. Logic: Ganti Tipe Rumah
    public function pilihModel($id)
    {
        $this->selectedModelId = $id;
    }

    // 4. Logic: Hitung Total (Otomatis jalan real-time)
    public function getTotalHargaProperty()
    {
        $luasValid = is_numeric($this->luas) ? (int)$this->luas : 0;
        $hargaPerMeter = $this->models[$this->selectedModelId]['price'];
        return $luasValid * $hargaPerMeter;
    }

    // 5. Logic: Ambil Data Model yang Sedang Dipilih
    public function getSelectedModelProperty()
    {
        return $this->models[$this->selectedModelId];
    }

    public function render()
    {
        // INI PENTING: Dia nunjuk ke folder resources/views/livewire/hitung-cepat.blade.php
        return view('livewire.hitung-cepat');
    }
}