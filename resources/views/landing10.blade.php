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
    {{-- Google Fonts: Outfit (Lebih geometric & modern dari Inter) --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Outfit', sans-serif; }
        
        /* Custom Scrollbar */
        .custom-scroll::-webkit-scrollbar { height: 6px; }
        .custom-scroll::-webkit-scrollbar-track { background: #e2e8f0; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #64748b; }
        .custom-scroll::-webkit-scrollbar-thumb:hover { background: #475569; }

        /* Grid Pattern Background for Technical Feel */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(0,0,0,0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(0,0,0,0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <nav class="bg-slate-900 shadow-md fixed w-full z-50 transition-all duration-300 border-b border-slate-800 text-white">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-amber-500 rounded flex items-center justify-center text-slate-900 font-extrabold text-xl shadow-lg shadow-amber-500/20">B</div>
                <div class="leading-tight">
                    <span class="block text-lg font-bold tracking-tight">Bangun<span class="text-amber-400">Jakarta</span></span>
                    <span class="block text-[10px] text-slate-400 font-medium tracking-wider">PEMPROV DKI JAKARTA</span>
                </div>
            </div>
            <div class="hidden lg:flex space-x-6 font-medium text-sm text-slate-300">
                <a href="#beranda" class="hover:text-amber-400 transition">Beranda</a>
                <a href="#harga-satuan" class="hover:text-amber-400 transition">Harga Satuan</a>
                <a href="#hitung-cepat" class="hover:text-amber-400 transition">Hitung Cepat</a>
                <a href="#pelatihan-tukang" class="hover:text-amber-400 transition">Pelatihan</a>
                <a href="#kompetisi" class="hover:text-amber-400 transition">Artikel</a>
            </div>
            <div>
                <a href="#" class="bg-amber-500 hover:bg-amber-600 text-slate-900 px-6 py-2.5 rounded font-bold text-sm transition shadow-lg shadow-amber-500/20 hover:-translate-y-0.5 transform">
                    Masuk / Daftar
                </a>
            </div>
        </div>
    </nav>

    <header id="beranda" class="relative pt-32 pb-32 lg:pt-48 lg:pb-48 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Jakarta Construction">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/95 to-slate-900/80"></div>
            <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-10 bg-center"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <span class="inline-flex items-center py-1.5 px-4 rounded bg-slate-800 text-amber-400 text-xs font-bold tracking-wider mb-6 border border-slate-700">
                    <i class="fas fa-hard-hat mr-2"></i> DINAS CIPTA KARYA, TATA RUANG DAN PERTANAHAN
                </span>
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6">
                    Infrastruktur Jakarta <br> 
                    <span class="text-amber-400">Transparan</span> & Terukur.
                </h1>
                <p class="text-lg text-slate-300 mb-10 leading-relaxed border-l-4 border-amber-500 pl-6">
                    Sistem informasi terintegrasi untuk standar harga, estimasi biaya konstruksi, dan sertifikasi tenaga kerja profesional di DKI Jakarta.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hitung-cepat" class="bg-amber-500 hover:bg-amber-600 text-slate-900 px-8 py-3.5 rounded font-bold transition shadow-lg shadow-amber-500/20 flex items-center justify-center gap-2">
                        <i class="fas fa-calculator"></i> Mulai Hitung RAB
                    </a>
                    <a href="#tentang" class="bg-transparent hover:bg-white/10 text-white px-8 py-3.5 rounded font-bold transition border-2 border-slate-600 flex items-center justify-center gap-2">
                        <i class="fas fa-arrow-down"></i> Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="relative -mt-24 z-20 container mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded shadow-xl border-b-4 border-amber-500 hover:-translate-y-1 transition group">
                <div class="w-16 h-16 bg-slate-100 text-slate-900 rounded flex items-center justify-center text-3xl mb-6 group-hover:bg-amber-500 transition-colors">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hitung Cepat Bangunan</h3>
                <p class="text-slate-600 leading-relaxed text-sm">Estimasi biaya konstruksi instan berdasarkan standar harga terkini DKI Jakarta.</p>
            </div>
            <div class="bg-white p-8 rounded shadow-xl border-b-4 border-amber-500 hover:-translate-y-1 transition group">
                <div class="w-16 h-16 bg-slate-100 text-slate-900 rounded flex items-center justify-center text-3xl mb-6 group-hover:bg-amber-500 transition-colors">
                    <i class="fas fa-user-hard-hat"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tukang Bersertifikat</h3>
                <p class="text-slate-600 leading-relaxed text-sm">Database tenaga kerja konstruksi terampil dan telah tersertifikasi resmi.</p>
            </div>
            <div class="bg-white p-8 rounded shadow-xl border-b-4 border-amber-500 hover:-translate-y-1 transition group">
                <div class="w-16 h-16 bg-slate-100 text-slate-900 rounded flex items-center justify-center text-3xl mb-6 group-hover:bg-amber-500 transition-colors">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Standar Harga Material</h3>
                <p class="text-slate-600 leading-relaxed text-sm">Acuan informasi standar harga satuan bahan bangunan di berbagai wilayah.</p>
            </div>
        </div>
    </section>

    <section id="harga-satuan" class="py-24 bg-slate-100 bg-grid-pattern border-t border-slate-200">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-amber-600 font-bold text-sm tracking-wider uppercase mb-2 block flex items-center"><span class="w-8 h-0.5 bg-amber-600 mr-2"></span> Transparansi Data</span>
                    <h2 class="text-3xl font-extrabold text-slate-900">Standar Harga Satuan</h2>
                    <p class="text-slate-600 mt-2 max-w-xl">Acuan resmi dan terupdate untuk kegiatan konstruksi di lingkungan Pemprov DKI Jakarta.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded p-8 shadow-sm border border-slate-200 hover:border-amber-500 transition group flex flex-col h-full relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-0 h-0 border-t-[60px] border-t-slate-100 border-l-[60px] border-l-transparent group-hover:border-t-amber-100 transition"></div>

                    <div class="flex-1 relative z-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-slate-900 rounded flex items-center justify-center text-amber-500 text-2xl">
                                <i class="fas fa-hammer"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Harga Satuan Pekerjaan</h3>
                        </div>
                        <p class="text-slate-600 mb-8 text-sm leading-relaxed pl-1">Analisa harga untuk pekerjaan persiapan, struktur, arsitektur, hingga mekanikal & elektrikal.</p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center justify-between bg-slate-50 p-4 rounded border border-slate-200">
                                <span class="font-bold text-slate-700"><i class="fas fa-caret-right text-amber-500 mr-2"></i>Pekerjaan Tanah</span>
                                <button class="text-xs bg-slate-200 text-slate-700 px-3 py-1.5 rounded font-bold hover:bg-amber-500 hover:text-slate-900 transition">
                                    Lihat Detail
                                </button>
                            </div>
                            <div class="flex items-center justify-between bg-slate-50 p-4 rounded border border-slate-200">
                                <span class="font-bold text-slate-700"><i class="fas fa-caret-right text-amber-500 mr-2"></i>Pekerjaan Beton</span>
                                <button class="text-xs bg-slate-200 text-slate-700 px-3 py-1.5 rounded font-bold hover:bg-amber-500 hover:text-slate-900 transition">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto relative z-10">
                        <a href="#" class="block w-full text-center py-3 rounded border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition uppercase tracking-wider text-sm">
                            Akses Data Lengkap
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded p-8 shadow-sm border border-slate-200 hover:border-amber-500 transition group flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-0 h-0 border-t-[60px] border-t-slate-100 border-l-[60px] border-l-transparent group-hover:border-t-amber-100 transition"></div>
                    
                    <div class="flex-1 relative z-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-slate-900 rounded flex items-center justify-center text-amber-500 text-2xl">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Harga Satuan Bangunan</h3>
                        </div>
                        <p class="text-slate-600 mb-8 text-sm leading-relaxed pl-1">Standar harga per meter persegi (m²) untuk Bangunan Gedung Negara (BGN) dan perumahan.</p>
                        
                        <div class="space-y-4 mb-8">
                             <div class="flex items-center justify-between bg-slate-50 p-4 rounded border border-slate-200">
                                <div>
                                    <div class="font-bold text-slate-700"><i class="fas fa-caret-right text-amber-500 mr-2"></i>Gedung Bertingkat</div>
                                    <div class="text-sm font-mono text-slate-500 ml-6 mt-1">Rp 6.200.000 / m²</div>
                                </div>
                            </div>
                             <div class="flex items-center justify-between bg-slate-50 p-4 rounded border border-slate-200">
                                <div>
                                    <div class="font-bold text-slate-700"><i class="fas fa-caret-right text-amber-500 mr-2"></i>Rumah Negara Tp. A</div>
                                    <div class="text-sm font-mono text-slate-500 ml-6 mt-1">Rp 5.850.000 / m²</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto relative z-10">
                        <a href="#" class="block w-full text-center py-3 rounded border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition uppercase tracking-wider text-sm">
                            Akses Data Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative pl-8 pb-8">
                    <div class="absolute top-0 left-0 w-24 h-24 bg-amber-500 rounded z-0"></div>
                    <div class="absolute bottom-0 right-0 w-32 h-32 bg-slate-200 rounded z-0"></div>
                    <div class="absolute top-4 right-4 w-20 h-20 bg-[radial-gradient(circle,_#64748b_1px,_transparent_1px)] bg-[length:8px_8px] z-0"></div>
                    
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop" class="relative z-10 rounded shadow-2xl object-cover h-[400px] w-full border-8 border-white" alt="Diskusi Konstruksi">
                </div>
                <div class="lg:w-1/2">
                    <span class="text-amber-600 font-bold text-sm tracking-wider uppercase mb-2 block flex items-center"><span class="w-8 h-0.5 bg-amber-600 mr-2"></span> Tentang Kami</span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-6 leading-tight">Platform Digital <br>Konstruksi Jakarta.</h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        <span class="font-bold text-slate-900">Bangun Jakarta</span> adalah inisiatif digitalisasi jasa konstruksi untuk menciptakan ekosistem pembangunan yang lebih efisien, transparan, dan akuntabel di DKI Jakarta.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start gap-3">
                            <div class="bg-amber-100 p-2 rounded text-amber-600"><i class="fas fa-database"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Integrasi Data</h4>
                                <p class="text-sm text-slate-500">Satu pintu data pelaku jasa konstruksi & regulasi.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-amber-100 p-2 rounded text-amber-600"><i class="fas fa-search-dollar"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Transparansi Harga</h4>
                                <p class="text-sm text-slate-500">Akses terbuka standar harga satuan & material.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hitung-cepat" class="py-24 bg-slate-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                 <span class="text-amber-400 font-bold text-sm tracking-wider uppercase mb-2 block">Kalkulator RAB</span>
                <h2 class="text-3xl font-extrabold text-white mb-4">Hitung Cepat Biaya Konstruksi</h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Simulasi estimasi biaya pembangunan berdasarkan standar harga pemerintah daerah. Akurat dan efisien.
                </p>
            </div>

            <div class="bg-slate-800 rounded shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-slate-700">
                <div class="lg:w-7/12 p-8 lg:p-12 bg-slate-800/50 relative" 
                     x-data="{ 
                        luas: '', 
                        selectedModel: { id: 1, name: 'Rumah Sederhana', price: 5500000, desc: 'Rp 5.5 Jt / m²' },
                        models: [
                            { id: 1, name: 'Rumah Sederhana', price: 5500000, desc: 'Rp 5.5 Jt / m²' },
                            { id: 2, name: 'Rumah Menengah', price: 7500000, desc: 'Rp 7.5 Jt / m²' },
                            { id: 3, name: 'Rumah Mewah', price: 12000000, desc: 'Rp 12 Jt / m²' },
                            { id: 4, name: 'Gedung 1 Lantai', price: 6500000, desc: 'Rp 6.5 Jt / m²' },
                            { id: 5, name: 'Gedung 2 Lantai', price: 8500000, desc: 'Rp 8.5 Jt / m²' },
                            { id: 6, name: 'Gudang Konstruksi', price: 4500000, desc: 'Rp 4.5 Jt / m²' }
                        ]
                     }">
                     <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-5 bg-center pointer-events-none"></div>
                    
                    <div class="space-y-8 relative z-10">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <label class="block text-sm font-bold text-slate-300 uppercase tracking-wider">1. Pilih Model Bangunan</label>
                                <span class="text-xs text-amber-400 font-medium animate-pulse"><i class="fas fa-arrows-alt-h mr-1"></i> Geser Pilihan &rarr;</span>
                            </div>
                            
                            <div class="flex gap-4 overflow-x-auto pb-4 snap-x custom-scroll flex-nowrap">
                                <template x-for="model in models" :key="model.id">
                                    <button @click="selectedModel = model" 
                                            :class="{'bg-amber-500 text-slate-900 border-amber-500': selectedModel.id === model.id, 'bg-slate-700 border-slate-600 text-slate-300 hover:bg-slate-600': selectedModel.id !== model.id}" 
                                            class="flex-shrink-0 w-52 p-5 border-2 rounded text-left transition relative overflow-hidden snap-start group">
                                        <div class="font-bold relative z-10 text-base" x-text="model.name"></div>
                                        <div class="text-sm mt-2 relative z-10 font-mono" :class="{'text-slate-900': selectedModel.id === model.id, 'text-amber-400': selectedModel.id !== model.id}" x-text="model.desc"></div>
                                        <i class="fas fa-hard-hat absolute -bottom-4 -right-4 text-6xl opacity-10 rotate-[-20deg]" :class="{'text-slate-900': selectedModel.id === model.id, 'text-white': selectedModel.id !== model.id}"></i>
                                    </button>
                                </template>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-300 uppercase tracking-wider mb-3">2. Masukkan Luas Bangunan (m²)</label>
                            <div class="relative">
                                <input type="number" x-model="luas" placeholder="Contoh: 120" 
                                    class="w-full px-5 py-4 bg-slate-700 border-2 border-slate-600 rounded focus:outline-none focus:border-amber-500 transition text-xl text-white placeholder-slate-500 font-mono">
                                <span class="absolute right-5 top-1/2 -translate-y-1/2 text-slate-400 font-bold">m²</span>
                            </div>
                        </div>
                    </div>
                    
                    <span x-effect="document.getElementById('displayHarga').innerText = luas ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(luas * selectedModel.price) : 'Rp 0'"></span>
                    <span x-effect="document.getElementById('displayTipe').innerText = selectedModel.name"></span>
                </div>

                <div class="lg:w-5/12 bg-amber-500 p-8 lg:p-12 text-slate-900 flex flex-col justify-center relative overflow-hidden hidden lg:flex">
                    <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-10 bg-center rotated-pattern"></div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-amber-400 rounded-full blur-3xl opacity-50 -mr-20 -mt-20"></div>

                    <div class="relative z-10">
                        <h4 class="text-slate-900 text-sm uppercase tracking-wider font-extrabold mb-8 flex items-center">
                            <i class="fas fa-clipboard-list mr-2"></i> Hasil Estimasi
                        </h4>
                        
                        <div class="mb-8 pb-8 border-b border-slate-900/20">
                            <div class="text-slate-800 text-sm font-bold uppercase mb-2">Model Terpilih</div>
                            <div class="text-3xl font-extrabold" id="displayTipe">Rumah Sederhana</div>
                        </div>

                        <div class="mb-10">
                            <div class="text-slate-800 text-sm font-bold uppercase mb-2">Total Estimasi Biaya</div>
                            <div class="text-5xl font-black text-slate-900 tracking-tight" id="displayHarga">Rp 0</div>
                        </div>

                        <button class="w-full py-4 bg-slate-900 text-amber-500 hover:bg-slate-800 rounded font-bold transition shadow-lg flex items-center justify-center uppercase tracking-wider text-sm">
                            <i class="fas fa-print mr-2"></i> Cetak Rincian
                        </button>
                        <p class="text-xs text-slate-800 mt-4 text-center font-medium">*Harga belum termasuk pajak & biaya tak terduga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pelatihan-tukang" class="py-24 bg-slate-100 bg-grid-pattern">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-amber-600 font-bold text-sm tracking-wider uppercase">Pengembangan SDM</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Pelatihan & Sertifikasi Tukang</h2>
                <p class="text-slate-600 mt-2">Tingkatkan kompetensi tenaga kerja konstruksi dengan standar resmi.</p>
            </div>

            <div x-data="{ tab: 'jadwal' }">
                <div class="flex justify-center mb-12">
                    <div class="bg-white p-1 rounded border border-slate-200 shadow-sm inline-flex">
                        <button @click="tab = 'jadwal'" :class="{'bg-slate-900 text-amber-500': tab === 'jadwal', 'text-slate-600 hover:text-slate-900 hover:bg-slate-50': tab !== 'jadwal'}" class="px-8 py-3 rounded font-bold text-sm transition-all duration-300 uppercase tracking-wider">
                            Jadwal Pelatihan
                        </button>
                        <button @click="tab = 'berita'" :class="{'bg-slate-900 text-amber-500': tab === 'berita', 'text-slate-600 hover:text-slate-900 hover:bg-slate-50': tab !== 'berita'}" class="px-8 py-3 rounded font-bold text-sm transition-all duration-300 uppercase tracking-wider">
                            Arsip Berita
                        </button>
                    </div>
                </div>

                <div x-show="tab === 'jadwal'" x-transition.opacity.duration.300ms>
                    <div class="flex justify-between items-center mb-4 px-2">
                         <h3 class="font-bold text-slate-700 uppercase tracking-wide text-sm">Jadwal Mendatang</h3>
                        <span class="text-xs text-amber-600 font-medium animate-pulse"><i class="fas fa-arrows-alt-h mr-1"></i> Geser Kartu &rarr;</span>
                    </div>
                    <div class="flex gap-6 overflow-x-auto pb-8 snap-x custom-scroll flex-nowrap">
                        <div class="bg-white rounded p-6 shadow-sm border-t-4 border-amber-500 hover:shadow-md transition min-w-[320px] w-[320px] md:w-1/3 flex-shrink-0 snap-center group">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-green-600 text-white text-[10px] font-bold px-2 py-1 rounded-sm uppercase tracking-wider">Pendaftaran Buka</span>
                                <span class="text-slate-500 font-mono text-sm font-bold"><i class="far fa-calendar-alt mr-1"></i> 10 FEB 2026</span>
                            </div>
                            <h3 class="font-bold text-xl text-slate-900 mb-3 group-hover:text-amber-600 transition">Sertifikasi Tukang Bangunan Gedung</h3>
                            <p class="text-sm text-slate-600 mb-6 line-clamp-2">Uji kompetensi dan sertifikasi resmi untuk pekerja bangunan gedung tingkat dasar.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-500 font-medium mb-6"><i class="fas fa-map-marker-alt text-amber-500"></i> BLK Jakarta Pusat</div>
                            <button class="w-full py-3 border-2 border-slate-900 text-slate-900 rounded font-bold hover:bg-slate-900 hover:text-white transition uppercase text-sm tracking-wider">Daftar Sekarang</button>
                        </div>
                         <div class="bg-white rounded p-6 shadow-sm border-t-4 border-amber-500 hover:shadow-md transition min-w-[320px] w-[320px] md:w-1/3 flex-shrink-0 snap-center group">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-amber-500 text-slate-900 text-[10px] font-bold px-2 py-1 rounded-sm uppercase tracking-wider">Segera Habis</span>
                                <span class="text-slate-500 font-mono text-sm font-bold"><i class="far fa-calendar-alt mr-1"></i> 25 FEB 2026</span>
                            </div>
                            <h3 class="font-bold text-xl text-slate-900 mb-3 group-hover:text-amber-600 transition">Pelatihan K3 Konstruksi (Mandor)</h3>
                            <p class="text-sm text-slate-600 mb-6 line-clamp-2">Wajib bagi mandor dan pengawas lapangan untuk standar keselamatan kerja.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-500 font-medium mb-6"><i class="fas fa-map-marker-alt text-amber-500"></i> Jakarta Selatan</div>
                            <button class="w-full py-3 border-2 border-slate-900 text-slate-900 rounded font-bold hover:bg-slate-900 hover:text-white transition uppercase text-sm tracking-wider">Daftar Sekarang</button>
                        </div>
                         <div class="bg-white rounded p-6 shadow-sm border-t-4 border-slate-300 hover:shadow-md transition min-w-[320px] w-[320px] md:w-1/3 flex-shrink-0 snap-center group opacity-75">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-slate-600 text-white text-[10px] font-bold px-2 py-1 rounded-sm uppercase tracking-wider">Ditutup</span>
                                <span class="text-slate-500 font-mono text-sm font-bold"><i class="far fa-calendar-alt mr-1"></i> 01 FEB 2026</span>
                            </div>
                            <h3 class="font-bold text-xl text-slate-900 mb-3">Ahli Muda Manajemen Konstruksi</h3>
                            <p class="text-sm text-slate-600 mb-6 line-clamp-2">Program lanjutan untuk manajemen proyek konstruksi skala menengah.</p>
                            <div class="flex items-center gap-2 text-sm text-slate-500 font-medium mb-6"><i class="fas fa-video text-amber-500"></i> Hybrid Learning</div>
                            <button class="w-full py-3 bg-slate-100 text-slate-400 rounded font-bold cursor-not-allowed uppercase text-sm tracking-wider">Kuota Penuh</button>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'berita'" x-cloak>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                        <div class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group flex flex-col">
                            <div class="h-52 overflow-hidden relative">
                                 <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                 <div class="absolute bottom-0 left-0 bg-slate-900 text-amber-500 text-xs font-bold px-3 py-1.5 uppercase tracking-wider">
                                    <i class="fas fa-check-circle mr-1"></i> Selesai
                                 </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <span class="text-slate-500 font-mono text-xs mb-3 block"><i class="far fa-calendar-check mr-1"></i> 15 JAN 2026</span>
                                <h3 class="font-bold text-lg text-slate-900 mb-3 group-hover:text-amber-600 transition leading-snug">Sukses Gelar Sertifikasi 500 Tukang Batu di Jakarta Timur</h3>
                                <p class="text-sm text-slate-600 line-clamp-2 mb-6 flex-1">Dinas Cipta Karya berhasil menuntaskan program sertifikasi massal untuk peningkatan kualitas SDM.</p>
                                <a href="#" class="text-sm font-bold text-slate-900 hover:text-amber-600 transition uppercase tracking-wider flex items-center mt-auto">Baca Liputan <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group flex flex-col">
                            <div class="h-52 overflow-hidden relative">
                                 <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                 <div class="absolute bottom-0 left-0 bg-slate-900 text-amber-500 text-xs font-bold px-3 py-1.5 uppercase tracking-wider">
                                    <i class="fas fa-check-circle mr-1"></i> Selesai
                                 </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <span class="text-slate-500 font-mono text-xs mb-3 block"><i class="far fa-calendar-check mr-1"></i> 10 JAN 2026</span>
                                <h3 class="font-bold text-lg text-slate-900 mb-3 group-hover:text-amber-600 transition leading-snug">Pelatihan K3 Intensif di Lokasi Proyek MRT Fase 2</h3>
                                <p class="text-sm text-slate-600 line-clamp-2 mb-6 flex-1">Kegiatan pelatihan keselamatan kerja lapangan langsung di lokasi proyek strategis nasional.</p>
                                <a href="#" class="text-sm font-bold text-slate-900 hover:text-amber-600 transition uppercase tracking-wider flex items-center mt-auto">Baca Liputan <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group flex flex-col">
                            <div class="h-52 overflow-hidden relative">
                                 <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                 <div class="absolute bottom-0 left-0 bg-slate-900 text-amber-500 text-xs font-bold px-3 py-1.5 uppercase tracking-wider">
                                    <i class="fas fa-check-circle mr-1"></i> Selesai
                                 </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <span class="text-slate-500 font-mono text-xs mb-3 block"><i class="far fa-calendar-check mr-1"></i> 05 JAN 2026</span>
                                <h3 class="font-bold text-lg text-slate-900 mb-3 group-hover:text-amber-600 transition leading-snug">Workshop Instalasi Listrik Hemat Energi untuk Warga</h3>
                                <p class="text-sm text-slate-600 line-clamp-2 mb-6 flex-1">Pemberdayaan masyarakat melalui workshop singkat instalasi listrik yang aman dan hemat energi.</p>
                                <a href="#" class="text-sm font-bold text-slate-900 hover:text-amber-600 transition uppercase tracking-wider flex items-center mt-auto">Baca Liputan <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <a href="#" class="inline-block px-8 py-3 rounded border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition uppercase tracking-wider text-sm">
                            Lihat Arsip Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kompetisi" class="py-24 bg-white border-t border-slate-200">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <div>
                    <span class="text-amber-600 font-bold text-sm tracking-wider uppercase flex items-center"><span class="w-8 h-0.5 bg-amber-600 mr-2"></span> Artikel & Berita</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Edukasi & Kompetisi Konstruksi</h2>
                </div>
                <a href="#" class="hidden md:inline-flex items-center text-slate-900 font-bold hover:text-amber-600 transition uppercase tracking-wider text-sm">
                    Lihat Semua Artikel <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group cursor-pointer h-full flex flex-col relative overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-sm text-xs font-bold uppercase shadow-sm tracking-wider">Kompetisi 2025</span>
                        <div class="absolute bottom-4 left-4 text-white font-mono text-xs">
                            <i class="far fa-calendar-alt mr-1"></i> 24 JAN 2026
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col bg-slate-50">
                        <h3 class="font-bold text-xl text-slate-900 mb-4 leading-snug group-hover:text-amber-600 transition">Pemenang Kompetisi Tenaga Kerja Konstruksi Jakarta 2025 Diumumkan</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-1">Selamat kepada para pemenang kategori pemasangan keramik dan instalasi listrik yang telah bersaing ketat dalam ajang tahunan ini...</p>
                        <div class="mt-auto">
                             <span class="text-slate-900 font-bold text-sm uppercase tracking-wider flex items-center group-hover:text-amber-600 transition">Baca Detail <i class="fas fa-arrow-right ml-2"></i></span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group cursor-pointer h-full flex flex-col relative overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1581092918056-0c4c5acd92f9?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-sm text-xs font-bold uppercase shadow-sm tracking-wider">Info Lomba</span>
                        <div class="absolute bottom-4 left-4 text-white font-mono text-xs">
                            <i class="far fa-calendar-alt mr-1"></i> 20 JAN 2026
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col bg-slate-50">
                        <h3 class="font-bold text-xl text-slate-900 mb-4 leading-snug group-hover:text-amber-600 transition">Pendaftaran Kompetisi Inovasi Beton Ramah Lingkungan 2026 Dibuka</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-1">Ajang bergengsi bagi mahasiswa dan praktisi konstruksi untuk menciptakan campuran beton alternatif yang lebih sustainable...</p>
                        <div class="mt-auto">
                             <span class="text-slate-900 font-bold text-sm uppercase tracking-wider flex items-center group-hover:text-amber-600 transition">Baca Detail <i class="fas fa-arrow-right ml-2"></i></span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded shadow-sm border border-slate-200 hover:border-amber-500 transition group cursor-pointer h-full flex flex-col relative overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1535732820275-9ffd998cac22?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                         <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-sm text-xs font-bold uppercase shadow-sm tracking-wider">Figur</span>
                        <div class="absolute bottom-4 left-4 text-white font-mono text-xs">
                            <i class="far fa-calendar-alt mr-1"></i> 15 JAN 2026
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col bg-slate-50">
                        <h3 class="font-bold text-xl text-slate-900 mb-4 leading-snug group-hover:text-amber-600 transition">Profil Juara 1: Pak Budi, Tukang Kayu Terbaik DKI Jakarta 2025</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-1">Kisah inspiratif pemenang kompetisi tingkat provinsi yang kini mendedikasikan diri menjadi instruktur muda di BLK...</p>
                        <div class="mt-auto">
                             <span class="text-slate-900 font-bold text-sm uppercase tracking-wider flex items-center group-hover:text-amber-600 transition">Baca Detail <i class="fas fa-arrow-right ml-2"></i></span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="serba-serbi" class="py-24 bg-slate-100 bg-grid-pattern">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-12">
                 <div>
                    <span class="text-amber-600 font-bold text-sm tracking-wider uppercase flex items-center"><span class="w-8 h-0.5 bg-amber-600 mr-2"></span> Informasi Lainnya</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Serba-Serbi Konstruksi</h2>
                </div>
                <a href="#" class="text-slate-900 font-bold hover:text-amber-600 transition hidden md:inline-block uppercase tracking-wider text-sm">Lihat Semua Info <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded overflow-hidden shadow-sm hover:shadow-lg transition group cursor-pointer h-full border-b-4 border-slate-900 hover:border-amber-500">
                    <div class="h-40 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1543269664-7eef42226a21?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-slate-900/30 transition"></div>
                        <div class="absolute top-4 left-4 w-10 h-10 bg-slate-900 text-amber-500 flex items-center justify-center rounded">
                            <i class="fas fa-video"></i>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2 block">Webinar</span>
                        <h3 class="font-bold text-slate-900 mb-3 leading-snug group-hover:text-amber-600 transition">Rekaman: Green Building Jakarta</h3>
                        <span class="text-xs font-bold text-slate-900 flex items-center uppercase tracking-wider group-hover:text-amber-600 transition">Tonton <i class="fas fa-play-circle ml-2"></i></span>
                    </div>
                </div>

                <div class="bg-white rounded overflow-hidden shadow-sm hover:shadow-lg transition group cursor-pointer h-full border-b-4 border-slate-900 hover:border-amber-500">
                    <div class="h-40 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1590642916589-592bcaaa3e5a?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-slate-900/30 transition"></div>
                         <div class="absolute top-4 left-4 w-10 h-10 bg-slate-900 text-amber-500 flex items-center justify-center rounded">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2 block">Kegiatan JK</span>
                        <h3 class="font-bold text-slate-900 mb-3 leading-snug group-hover:text-amber-600 transition">Kunjungan Proyek MRT Fase 2</h3>
                        <span class="text-xs font-bold text-slate-900 flex items-center uppercase tracking-wider group-hover:text-amber-600 transition">Galeri <i class="fas fa-images ml-2"></i></span>
                    </div>
                </div>

                <div class="bg-white rounded overflow-hidden shadow-sm hover:shadow-lg transition group cursor-pointer h-full border-b-4 border-slate-900 hover:border-amber-500">
                    <div class="h-40 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-slate-900/30 transition"></div>
                         <div class="absolute top-4 left-4 w-10 h-10 bg-slate-900 text-amber-500 flex items-center justify-center rounded">
                            <i class="fas fa-box-open"></i>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50">
                         <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2 block">Product Knowledge</span>
                        <h3 class="font-bold text-slate-900 mb-3 leading-snug group-hover:text-amber-600 transition">Inovasi Semen Instan Terbaru</h3>
                        <span class="text-xs font-bold text-slate-900 flex items-center uppercase tracking-wider group-hover:text-amber-600 transition">Baca <i class="fas fa-book-open ml-2"></i></span>
                    </div>
                </div>

                <div class="bg-white rounded overflow-hidden shadow-sm hover:shadow-lg transition group cursor-pointer h-full border-b-4 border-slate-900 hover:border-amber-500">
                    <div class="h-40 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-slate-900/30 transition"></div>
                         <div class="absolute top-4 left-4 w-10 h-10 bg-slate-900 text-amber-500 flex items-center justify-center rounded">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-50">
                         <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2 block">Kompetisi TK</span>
                        <h3 class="font-bold text-slate-900 mb-3 leading-snug group-hover:text-amber-600 transition">Lomba Tukang Cat Dekoratif</h3>
                        <span class="text-xs font-bold text-slate-900 flex items-center uppercase tracking-wider group-hover:text-amber-600 transition">Cek Pemenang <i class="fas fa-award ml-2"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="katalog" class="py-24 bg-white border-t border-slate-200">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Katalog Konstruksi</h2>
                    <p class="text-slate-600 mt-2">Direktori lengkap kebutuhan proyek Anda.</p>
                </div>
                <a href="#" class="hidden md:inline-flex items-center text-slate-900 font-bold hover:text-amber-600 transition uppercase tracking-wider text-sm">
                    Lihat Semua Katalog <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="group block">
                    <div class="aspect-square rounded bg-slate-100 relative overflow-hidden mb-4 shadow-sm border border-slate-200 group-hover:border-amber-500 transition">
                        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Material">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/40 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="bg-slate-900 text-amber-500 px-3 py-1.5 rounded-sm text-xs font-bold shadow-sm uppercase tracking-wider w-full block text-center">Material</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-amber-600 transition text-center">Bahan Bangunan</h4>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded bg-slate-100 relative overflow-hidden mb-4 shadow-sm border border-slate-200 group-hover:border-amber-500 transition">
                        <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Alat">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/40 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="bg-slate-900 text-amber-500 px-3 py-1.5 rounded-sm text-xs font-bold shadow-sm uppercase tracking-wider w-full block text-center">Peralatan</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-amber-600 transition text-center">Sewa Alat Berat</h4>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded bg-slate-100 relative overflow-hidden mb-4 shadow-sm border border-slate-200 group-hover:border-amber-500 transition">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Tenaga Kerja">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/40 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="bg-slate-900 text-amber-500 px-3 py-1.5 rounded-sm text-xs font-bold shadow-sm uppercase tracking-wider w-full block text-center">SDM</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-amber-600 transition text-center">Tenaga Kerja</h4>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded bg-slate-100 relative overflow-hidden mb-4 shadow-sm border border-slate-200 group-hover:border-amber-500 transition">
                        <img src="https://plus.unsplash.com/premium_photo-1661962633099-0d268d098e9c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Vendor">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/40 transition"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="bg-slate-900 text-amber-500 px-3 py-1.5 rounded-sm text-xs font-bold shadow-sm uppercase tracking-wider w-full block text-center">Vendor</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-amber-600 transition text-center">Jasa Konstruksi</h4>
                </a>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-slate-100 bg-grid-pattern border-t border-slate-200">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Pertanyaan Umum (FAQ)</h2>
            </div>
            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none group hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900 group-hover:text-amber-600 transition">Apa itu fitur Hitung Cepat?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-amber-500" :class="{'rotate-180': active === 1}"></i>
                    </button>
                    <div x-show="active === 1" x-collapse class="px-6 py-5 text-slate-600 bg-slate-50 border-t border-slate-100 text-sm leading-relaxed">
                        Fitur simulasi biaya konstruksi instan yang dirancang untuk membantu masyarakat mendapatkan estimasi awal tanpa perlu membuat RAB manual yang rumit, berdasarkan standar harga Pemprov DKI.
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none group hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900 group-hover:text-amber-600 transition">Dari mana sumber data harga satuan?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-amber-500" :class="{'rotate-180': active === 2}"></i>
                    </button>
                    <div x-show="active === 2" x-collapse class="px-6 py-5 text-slate-600 bg-slate-50 border-t border-slate-100 text-sm leading-relaxed">
                        Data diambil langsung dari hasil survei pasar dan analisa resmi yang dilakukan secara berkala oleh Dinas Cipta Karya, Tata Ruang dan Pertanahan Provinsi DKI Jakarta.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10 border-t-4 border-amber-500 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-5 bg-center pointer-events-none"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                         <div class="w-10 h-10 bg-amber-500 rounded flex items-center justify-center text-slate-900 font-extrabold text-xl shadow-lg shadow-amber-500/20">B</div>
                        <span class="text-2xl font-bold text-white">Bangun<span class="text-amber-500">Jakarta</span></span>
                    </div>
                    <p class="leading-relaxed text-slate-400 mb-8 max-w-sm">
                        Sistem Informasi jasa konstruksi terintegrasi untuk mewujudkan pembangunan Jakarta yang transparan, efisien, dan berkualitas.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded bg-slate-800 flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition text-lg"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-12 h-12 rounded bg-slate-800 flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition text-lg"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-12 h-12 rounded bg-slate-800 flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition text-lg"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Tautan Cepat</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right text-amber-500 mr-2 text-xs"></i>Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right text-amber-500 mr-2 text-xs"></i>Hitung Cepat RAB</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right text-amber-500 mr-2 text-xs"></i>Standar Harga</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right text-amber-500 mr-2 text-xs"></i>Jadwal Pelatihan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center text-amber-500 flex-shrink-0"><i class="fas fa-map-marker-alt"></i></div>
                            <span class="leading-relaxed">Jl. Taman Jatibaru No.17, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, DKI Jakarta</span>
                        </li>
                        <li class="flex items-center gap-4">
                             <div class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center text-amber-500 flex-shrink-0"><i class="fas fa-phone"></i></div>
                            <span class="font-mono">(021) 3510008</span>
                        </li>
                         <li class="flex items-center gap-4">
                             <div class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center text-amber-500 flex-shrink-0"><i class="fas fa-envelope"></i></div>
                            <span class="font-mono">dcktrp@jakarta.go.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-sm text-slate-500 font-medium uppercase tracking-wider">
                <p>&copy; 2026 Dinas Cipta Karya, Tata Ruang dan Pertanahan Provinsi DKI Jakarta. <br class="md:hidden">All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>