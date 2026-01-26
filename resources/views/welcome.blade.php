<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Jakarta Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom Font agar lebih modern */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-white font-bold text-xl">B</div>
                <span class="text-xl font-bold tracking-tight text-gray-800">Bangun<span class="text-orange-500">Jakarta</span></span>
            </div>
            <div class="hidden md:flex space-x-8 font-medium text-sm">
                <a href="#" class="hover:text-orange-500 transition">Beranda</a>
                <a href="#fitur" class="hover:text-orange-500 transition">Fitur</a>
                <a href="#hitung-cepat" class="hover:text-orange-500 transition">Hitung Cepat</a>
                <a href="#katalog" class="hover:text-orange-500 transition">Katalog</a>
            </div>
            <div>
                <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition shadow-lg shadow-orange-500/30">
                    Masuk / Daftar
                </a>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Jakarta Construction">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-orange-500/20 text-orange-400 text-xs font-bold tracking-wider mb-4 border border-orange-500/30">SISTEM INFORMASI KONSTRUKSI</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6">
                Wujudkan Pembangunan <br> Jakarta yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">Transparan</span>
            </h1>
            <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto">
                Platform terintegrasi untuk menghitung RAB, mencari tenaga kerja bersertifikat, dan memantau harga material konstruksi secara real-time.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#hitung-cepat" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-xl font-semibold transition shadow-lg hover:shadow-orange-500/40">
                    Mulai Hitung RAB
                </a>
                <a href="#" class="bg-slate-800 hover:bg-slate-700 text-white px-8 py-3 rounded-xl font-semibold transition border border-slate-700">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </header>

    <section id="fitur" class="relative -mt-16 z-20 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($features as $feature)
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-6">
                    <i class="{{ $feature['icon'] }}"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $feature['title'] }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ $feature['desc'] }}</p>
                <a href="#" class="inline-flex items-center mt-4 text-orange-600 font-semibold hover:text-orange-700">
                    Akses Fitur <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section id="hitung-cepat" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Hitung Cepat Biaya Konstruksi</h2>
                    <p class="text-gray-600 mb-6">
                        Dapatkan estimasi awal biaya pembangunan rumah atau gedung Anda di Jakarta tanpa perlu menyusun RAB yang rumit. Cukup pilih model dan masukkan luas.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i> Berdasarkan harga satuan DKI Jakarta</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i> Hasil instan & akurat</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i> Data terupdate otomatis</li>
                    </ul>
                </div>

                <div class="lg:w-1/2 w-full bg-slate-900 p-8 rounded-3xl shadow-2xl text-white" x-data="{ luas: 0, hargaPerMeter: 5500000, total: 0 }">
                    <h3 class="text-xl font-bold mb-6 border-b border-slate-700 pb-4">Simulasi Biaya</h3>
                    
                    <div class="mb-5">
                        <label class="block text-slate-400 text-sm mb-2">Pilih Tipe Bangunan</label>
                        <select class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-orange-500"
                                @change="hargaPerMeter = $event.target.value; total = luas * hargaPerMeter">
                            <option value="5500000">Rumah Sederhana (Rp 5.5jt/m²)</option>
                            <option value="7500000">Rumah Menengah (Rp 7.5jt/m²)</option>
                            <option value="12000000">Rumah Mewah (Rp 12jt/m²)</option>
                        </select>
                    </div>

                    <div class="mb-8">
                        <label class="block text-slate-400 text-sm mb-2">Luas Bangunan (m²)</label>
                        <input type="number" x-model="luas" @input="total = luas * hargaPerMeter" 
                               class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-orange-500" placeholder="Contoh: 36">
                    </div>

                    <div class="bg-gradient-to-r from-orange-500 to-red-500 p-6 rounded-xl text-center">
                        <span class="block text-white/80 text-sm mb-1">Estimasi Total Biaya</span>
                        <span class="text-3xl font-bold" x-text="new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(total)">Rp 0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Info Terkini</h2>
                    <p class="text-gray-500 mt-2">Berita dan kegiatan seputar konstruksi Jakarta.</p>
                </div>
                <a href="#" class="text-orange-600 font-semibold hover:text-orange-700">Lihat Semua</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($news as $item)
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition group cursor-pointer">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="https://source.unsplash.com/random/800x600/?construction,{{ $loop->index }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wide text-gray-800">
                            {{ $item['category'] }}
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-gray-400 text-xs mb-2"><i class="far fa-calendar-alt mr-1"></i> {{ $item['date'] }}</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-orange-500 transition">{{ $item['title'] }}</h4>
                        <p class="text-gray-500 text-sm line-clamp-2">Kegiatan ini bertujuan untuk meningkatkan kompetensi...</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2026 Dinas Cipta Karya, Tata Ruang dan Pertanahan. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>