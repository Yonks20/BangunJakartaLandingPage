<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Jakarta - Sistem Informasi Konstruksi</title>
    
    {{-- Memanggil CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Alpine.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- Google Fonts --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .pattern-grid { background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 20px 20px; }
    </style>
</head>
<body class="bg-blue-50 text-slate-800 antialiased">

    <nav class="bg-white/90 backdrop-blur-md shadow-sm fixed w-full z-50 transition-all duration-300 border-b border-blue-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-blue-700 to-blue-500 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-blue-500/20 shadow-lg">B</div>
                <div class="leading-tight">
                    <span class="block text-lg font-bold tracking-tight text-slate-900">Bangun<span class="text-blue-600">Jakarta</span></span>
                    <span class="block text-[10px] text-slate-500 font-medium tracking-wider">PEMPROV DKI JAKARTA</span>
                </div>
            </div>
            <div class="hidden lg:flex space-x-6 font-medium text-sm text-slate-600">
                <a href="#beranda" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#harga-satuan" class="hover:text-blue-600 transition">Harga Satuan</a>
                <a href="#hitung-cepat" class="hover:text-blue-600 transition">Hitung Cepat</a>
                <a href="#edukasi" class="hover:text-blue-600 transition">Edukasi</a>
                <a href="#serba-serbi" class="hover:text-blue-600 transition">Berita</a>
            </div>
            <div>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition shadow-lg shadow-blue-600/30 hover:-translate-y-0.5 transform">
                    Masuk
                </a>
            </div>
        </div>
    </nav>

    <header id="beranda" class="relative pt-32 pb-24 lg:pt-48 lg:pb-40 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-20 scale-105" alt="Jakarta Skyline">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-blue-900/10"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1.5 px-4 rounded-full bg-slate-800/80 text-blue-400 text-xs font-bold tracking-wider mb-6 border border-slate-700 backdrop-blur-sm">
                <i class="fas fa-city mr-2"></i> DINAS CIPTA KARYA, TATA RUANG DAN PERTANAHAN
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6">
                Membangun Jakarta <br> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Lebih Transparan</span> & Efisien
            </h1>
            <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                Platform terintegrasi untuk menghitung RAB, mencari tenaga kerja bersertifikat, serta memantau harga material konstruksi.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#hitung-cepat" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-xl font-semibold transition shadow-lg hover:shadow-blue-600/40 flex items-center justify-center gap-2">
                    <i class="fas fa-calculator"></i> Mulai Hitung RAB
                </a>
            </div>
        </div>
    </header>

    <section class="relative -mt-20 z-20 container mx-auto px-6 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition border border-blue-50">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-6">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hitung Cepat</h3>
                <p class="text-slate-500 text-sm">Estimasi biaya konstruksi instan.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition border border-blue-50">
                <div class="w-14 h-14 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center text-2xl mb-6">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tukang Pro</h3>
                <p class="text-slate-500 text-sm">Database tenaga kerja bersertifikat.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition border border-blue-50">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-2xl mb-6">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Harga Material</h3>
                <p class="text-slate-500 text-sm">Standar harga bahan bangunan DKI.</p>
            </div>
        </div>
    </section>

    <section id="harga-satuan" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10">
                <div>
                    <span class="text-blue-600 font-bold text-sm tracking-wider uppercase mb-2 block">Data Transparansi</span>
                    <h2 class="text-3xl font-extrabold text-slate-900">Standar Harga Satuan</h2>
                    <p class="text-slate-500 mt-2">Acuan harga resmi untuk kegiatan konstruksi di Jakarta.</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 md:mt-0">
                    Lihat Data Lengkap <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:border-blue-400 transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-20 bg-blue-100 rounded-full blur-3xl opacity-50 -mr-10 -mt-10"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-sm flex items-center justify-center text-blue-600 text-xl mb-6">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Harga Satuan Pekerjaan</h3>
                        <p class="text-slate-500 mb-6">Mencakup analisa harga satuan untuk pekerjaan persiapan, struktur, arsitektur, hingga mekanikal.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-center justify-between bg-white p-3 rounded-lg border border-slate-100">
                                <span class="text-sm font-medium text-slate-700">Pekerjaan Tanah</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Update Jan 2026</span>
                            </div>
                            <div class="flex items-center justify-between bg-white p-3 rounded-lg border border-slate-100">
                                <span class="text-sm font-medium text-slate-700">Pekerjaan Beton</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Update Jan 2026</span>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-6 text-blue-600 font-bold hover:underline">Cek Detail Harga <i class="fas fa-chevron-right text-xs ml-1"></i></a>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:border-blue-400 transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-20 bg-cyan-100 rounded-full blur-3xl opacity-50 -mr-10 -mt-10"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-white rounded-lg shadow-sm flex items-center justify-center text-cyan-600 text-xl mb-6">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Harga Satuan Bangunan</h3>
                        <p class="text-slate-500 mb-6">Standar harga per meter persegi untuk Bangunan Gedung Negara (BGN) dan perumahan.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-center justify-between bg-white p-3 rounded-lg border border-slate-100">
                                <span class="text-sm font-medium text-slate-700">Gedung Bertingkat</span>
                                <span class="text-sm font-bold text-slate-900">Rp 6.2jt / m²</span>
                            </div>
                            <div class="flex items-center justify-between bg-white p-3 rounded-lg border border-slate-100">
                                <span class="text-sm font-medium text-slate-700">Rumah Negara Tp. A</span>
                                <span class="text-sm font-bold text-slate-900">Rp 5.8jt / m²</span>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-6 text-cyan-600 font-bold hover:underline">Cek Detail Harga <i class="fas fa-chevron-right text-xs ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-20 bg-blue-50/50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-20 h-20 bg-blue-100 rounded-full z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-200 rounded-full z-0"></div>
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1000&auto=format&fit=crop" class="relative z-10 rounded-3xl shadow-2xl object-cover h-[400px] w-full border-4 border-white" alt="Construction Site">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Apa itu <span class="text-blue-600">Bangun Jakarta?</span></h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Sistem Informasi jasa konstruksi yang memudahkan komunikasi antar pelaku jasa konstruksi dengan menyediakan data <span class="font-semibold text-slate-900">real-time</span>.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-slate-700">Integrasi data pelaku jasa konstruksi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-slate-700">Transparansi harga satuan & material.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="hitung-cepat" class="py-24 bg-white border-y border-slate-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Hitung Cepat Biaya Konstruksi</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Simulasi biaya pembangunan rumah di Jakarta.</p>
            </div>

            <div class="bg-blue-50 rounded-3xl shadow-lg overflow-hidden flex flex-col lg:flex-row border border-blue-100">
                <div class="lg:w-7/12 p-8 lg:p-12" x-data="{ luas: '', harga: 5500000, tipe: 'sederhana' }">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Tipe Bangunan</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <button @click="harga = 5500000; tipe='sederhana'" :class="{'bg-blue-100 border-blue-500 text-blue-800': tipe==='sederhana', 'bg-white border-slate-200': tipe!=='sederhana'}" class="p-4 border rounded-xl text-left transition">
                                    <div class="font-bold">Sederhana</div>
                                    <div class="text-xs mt-1">Rp 5.5 Jt/m²</div>
                                </button>
                                <button @click="harga = 7500000; tipe='menengah'" :class="{'bg-blue-100 border-blue-500 text-blue-800': tipe==='menengah', 'bg-white border-slate-200': tipe!=='menengah'}" class="p-4 border rounded-xl text-left transition">
                                    <div class="font-bold">Menengah</div>
                                    <div class="text-xs mt-1">Rp 7.5 Jt/m²</div>
                                </button>
                                <button @click="harga = 12000000; tipe='mewah'" :class="{'bg-blue-100 border-blue-500 text-blue-800': tipe==='mewah', 'bg-white border-slate-200': tipe!=='mewah'}" class="p-4 border rounded-xl text-left transition">
                                    <div class="font-bold">Mewah</div>
                                    <div class="text-xs mt-1">Rp 12 Jt/m²</div>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Luas (m²)</label>
                            <input type="number" x-model="luas" placeholder="0" class="w-full px-5 py-4 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:outline-none text-lg">
                        </div>
                    </div>
                    
                    <span x-effect="document.getElementById('displayHarga').innerText = luas ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(luas * harga) : 'Rp 0'"></span>
                </div>

                <div class="lg:w-5/12 bg-slate-900 p-8 lg:p-12 text-white flex flex-col justify-center relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-32 bg-blue-600 rounded-full blur-[100px] opacity-30"></div>
                    <div class="relative z-10">
                        <div class="text-slate-400 text-sm mb-1">Total Estimasi</div>
                        <div class="text-4xl font-extrabold text-blue-400 mb-8" id="displayHarga">Rp 0</div>
                        <button class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded-xl font-bold transition">Lihat Rincian</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="edukasi" class="py-24 bg-slate-50 pattern-grid">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-bold text-sm tracking-wider uppercase">Pengembangan SDM</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Edukasi & Kompetensi</h2>
            </div>

            <div x-data="{ tab: 'pelatihan' }">
                <div class="flex justify-center mb-10">
                    <div class="bg-white p-1 rounded-full border border-slate-200 shadow-sm inline-flex">
                        <button @click="tab = 'pelatihan'" :class="{'bg-blue-600 text-white shadow-md': tab === 'pelatihan', 'text-slate-500 hover:text-slate-700': tab !== 'pelatihan'}" class="px-6 py-2 rounded-full font-medium text-sm transition-all duration-300">
                            Jadwal Pelatihan
                        </button>
                        <button @click="tab = 'webinar'" :class="{'bg-blue-600 text-white shadow-md': tab === 'webinar', 'text-slate-500 hover:text-slate-700': tab !== 'webinar'}" class="px-6 py-2 rounded-full font-medium text-sm transition-all duration-300">
                            Webinar Konstruksi
                        </button>
                    </div>
                </div>

                <div x-show="tab === 'pelatihan'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded">Buka</span>
                                <span class="text-slate-400 text-xs"><i class="far fa-calendar mr-1"></i> 10 Feb 2026</span>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">Sertifikasi K3 Konstruksi</h3>
                            <p class="text-slate-500 text-sm mb-4 line-clamp-2">Pelatihan dasar keselamatan dan kesehatan kerja untuk tenaga lapangan.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-600 mb-6">
                                <i class="fas fa-map-marker-alt text-blue-500"></i> Jakarta Pusat
                            </div>
                            <button class="w-full py-2 border border-blue-600 text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition">Daftar Sekarang</button>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-2 py-1 rounded">Segera</span>
                                <span class="text-slate-400 text-xs"><i class="far fa-calendar mr-1"></i> 25 Feb 2026</span>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">Ahli Muda Manajemen Konstruksi</h3>
                            <p class="text-slate-500 text-sm mb-4 line-clamp-2">Peningkatan kompetensi manajemen proyek untuk engineer muda.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-600 mb-6">
                                <i class="fas fa-map-marker-alt text-blue-500"></i> Jakarta Selatan
                            </div>
                            <button class="w-full py-2 border border-blue-600 text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition">Lihat Detail</button>
                        </div>
                         <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-red-100 text-red-700 text-xs font-bold px-2 py-1 rounded">Tutup</span>
                                <span class="text-slate-400 text-xs"><i class="far fa-calendar mr-1"></i> 01 Feb 2026</span>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">BIM Coordinator Training</h3>
                            <p class="text-slate-500 text-sm mb-4 line-clamp-2">Pelatihan teknis Building Information Modeling level intermediate.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-600 mb-6">
                                <i class="fas fa-video text-blue-500"></i> Online (Zoom)
                            </div>
                            <button class="w-full py-2 bg-slate-100 text-slate-400 rounded-lg font-semibold cursor-not-allowed">Penuh</button>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'webinar'" x-cloak class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col md:flex-row">
                        <div class="md:w-1/3 bg-slate-200 relative">
                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                                <i class="fas fa-play-circle text-4xl text-white drop-shadow-lg"></i>
                            </div>
                        </div>
                        <div class="p-6 md:w-2/3">
                            <span class="text-blue-600 text-xs font-bold uppercase tracking-wide">Webinar Series #12</span>
                            <h3 class="font-bold text-lg text-slate-900 mt-2 mb-2">Green Building: Masa Depan Jakarta</h3>
                            <p class="text-slate-500 text-sm mb-4">Diskusi panel bersama ahli tata kota mengenai penerapan bangunan hijau.</p>
                            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Tonton Rekaman</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col md:flex-row">
                        <div class="md:w-1/3 bg-slate-200 relative">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                                <i class="fas fa-play-circle text-4xl text-white drop-shadow-lg"></i>
                            </div>
                        </div>
                        <div class="p-6 md:w-2/3">
                            <span class="text-blue-600 text-xs font-bold uppercase tracking-wide">Webinar Series #11</span>
                            <h3 class="font-bold text-lg text-slate-900 mt-2 mb-2">Digitalisasi Perizinan Gedung</h3>
                            <p class="text-slate-500 text-sm mb-4">Sosialisasi sistem baru perizinan mendirikan bangunan gedung di DKI Jakarta.</p>
                            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Tonton Rekaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="serba-serbi" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-extrabold text-slate-900">Serba-Serbi Konstruksi</h2>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 hidden md:inline-block">Lihat Semua Berita</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=600&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-slate-800">Product Knowledge</span>
                    </div>
                    <div class="text-slate-400 text-xs mb-2">24 Jan 2026</div>
                    <h3 class="font-bold text-slate-900 leading-snug group-hover:text-blue-600 transition">Inovasi Beton Ramah Lingkungan untuk Trotoar Jakarta</h3>
                </article>

                <article class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1590642916589-592bcaaa3e5a?q=80&w=600&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-slate-800">Kompetisi</span>
                    </div>
                    <div class="text-slate-400 text-xs mb-2">22 Jan 2026</div>
                    <h3 class="font-bold text-slate-900 leading-snug group-hover:text-blue-600 transition">Pemenang Kompetisi Tenaga Kerja Konstruksi 2025</h3>
                </article>

                <article class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=600&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-slate-800">Teknologi</span>
                    </div>
                    <div class="text-slate-400 text-xs mb-2">20 Jan 2026</div>
                    <h3 class="font-bold text-slate-900 leading-snug group-hover:text-blue-600 transition">Pemanfaatan Drone untuk Pemantauan Gedung Tinggi</h3>
                </article>

                <article class="group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=600&auto=format&fit=crop" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-slate-800">Regulasi</span>
                    </div>
                    <div class="text-slate-400 text-xs mb-2">18 Jan 2026</div>
                    <h3 class="font-bold text-slate-900 leading-snug group-hover:text-blue-600 transition">Aturan Baru Izin Mendirikan Bangunan (IMB) 2026</h3>
                </article>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto px-6 max-w-3xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">FAQ</h2>
            </div>
            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-slate-800">Apa itu Hitung Cepat?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition" :class="{'rotate-180': active === 1}"></i>
                    </button>
                    <div x-show="active === 1" x-collapse class="px-6 py-4 text-slate-600 bg-slate-50 text-sm">
                        Fitur simulasi biaya konstruksi instan tanpa perlu membuat RAB manual yang rumit.
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-slate-800">Bagaimana validasi datanya?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition" :class="{'rotate-180': active === 2}"></i>
                    </button>
                    <div x-show="active === 2" x-collapse class="px-6 py-4 text-slate-600 bg-slate-50 text-sm">
                        Data diambil langsung dari survei pasar Dinas Cipta Karya dan diperbarui setiap bulan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-300 pt-16 pb-8 border-t border-slate-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">B</div>
                        <span class="text-xl font-bold text-white">Bangun<span class="text-blue-500">Jakarta</span></span>
                    </div>
                    <p class="leading-relaxed text-slate-400 mb-6 max-w-sm">
                        Mewujudkan pembangunan Jakarta yang transparan, efisien, dan berkualitas.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Kontak</h4>
                    <ul class="space-y-4 text-sm">
                        <li>(021) 3510008</li>
                        <li>dcktrp@jakarta.go.id</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-sm text-slate-500">
                <p>&copy; 2026 Dinas Cipta Karya, Tata Ruang dan Pertanahan DKI Jakarta.</p>
            </div>
        </div>
    </footer>

</body>
</html>