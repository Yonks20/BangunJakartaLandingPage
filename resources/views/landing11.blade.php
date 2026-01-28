<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Jakarta - Modern Construction Platform</title>
    
    {{-- Memanggil CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Alpine.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- Google Fonts: Plus Jakarta Sans (Font paling modern saat ini) --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Hide Scrollbar tapi tetap bisa scroll */
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }

        /* Background Mesh Gradient yang halus */
        .bg-mesh {
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-indigo-500 selection:text-white">

    <div class="fixed top-0 w-full z-50 px-4 py-4">
        <nav class="bg-white/80 backdrop-blur-lg shadow-lg shadow-slate-200/50 rounded-full max-w-6xl mx-auto border border-white/50 px-6 py-3 flex justify-between items-center transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-indigo-500/30 shadow-lg">B</div>
                <div class="leading-tight">
                    <span class="block text-lg font-bold tracking-tight text-slate-900">Bangun<span class="text-indigo-600">Jakarta</span></span>
                </div>
            </div>
            <div class="hidden lg:flex bg-slate-100/50 rounded-full px-2 py-1 border border-slate-200/50">
                <a href="#beranda" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-white rounded-full transition-all">Beranda</a>
                <a href="#harga-satuan" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-white rounded-full transition-all">Harga</a>
                <a href="#hitung-cepat" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-white rounded-full transition-all">Hitung</a>
                <a href="#pelatihan-tukang" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-white rounded-full transition-all">Pelatihan</a>
                <a href="#artikel" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-white rounded-full transition-all">Artikel</a>
            </div>
            <div>
                <a href="#" class="bg-slate-900 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-full text-sm font-bold transition shadow-lg shadow-slate-900/20 hover:-translate-y-0.5 transform">
                    Masuk
                </a>
            </div>
        </nav>
    </div>

    <header id="beranda" class="relative pt-40 pb-32 lg:pt-52 lg:pb-48 bg-slate-900 overflow-hidden rounded-b-[3rem]">
        <div class="absolute top-0 -left-40 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 -right-40 w-96 h-96 bg-violet-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-40 left-20 w-96 h-96 bg-teal-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-10 mix-blend-overlay" alt="Jakarta Skyline">
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1.5 px-4 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-indigo-300 text-xs font-bold tracking-wider mb-6 shadow-xl">
                ✨ SISTEM INFORMASI KONSTRUKSI TERPADU
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight">
                Membangun Jakarta <br> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-violet-400 to-teal-300">Lebih Cerdas.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed font-light">
                Platform digital satu pintu untuk transparansi harga, estimasi biaya konstruksi, dan peningkatan kompetensi tenaga kerja profesional.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#hitung-cepat" class="group bg-white text-indigo-900 px-8 py-4 rounded-full font-bold transition shadow-[0_0_40px_-10px_rgba(255,255,255,0.3)] hover:shadow-[0_0_60px_-15px_rgba(255,255,255,0.5)] hover:scale-105 flex items-center justify-center gap-2">
                    <i class="fas fa-calculator text-indigo-500 group-hover:scale-110 transition"></i> Mulai Hitung RAB
                </a>
                <a href="#tentang" class="bg-white/5 hover:bg-white/10 text-white backdrop-blur-sm px-8 py-4 rounded-full font-bold transition border border-white/10 flex items-center justify-center gap-2">
                    <i class="fas fa-play-circle"></i> Cara Kerja
                </a>
            </div>
        </div>
    </header>

    <section class="relative -mt-20 z-20 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-indigo-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hitung Cepat</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Estimasi biaya konstruksi instan dengan algoritma cerdas berbasis data Pemprov DKI.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-indigo-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-teal-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tukang Pro</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Database tenaga kerja tersertifikasi, siap bekerja dengan standar profesional tinggi.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-indigo-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-violet-50 text-violet-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-violet-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Harga Material</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Transparansi harga satuan bahan bangunan terkini di seluruh wilayah Jakarta.</p>
            </div>
        </div>
    </section>

    <section id="harga-satuan" class="py-32 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <span class="text-indigo-600 font-bold text-xs tracking-widest uppercase mb-3 block">TRANSPARANSI DATA</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Standar Harga Satuan</h2>
                </div>
                <a href="#" class="group flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-800 transition">
                    Lihat Data Lengkap <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-indigo-100/50 transition duration-300">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Harga Pekerjaan</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-50 hover:bg-indigo-50/50 transition cursor-pointer group">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                <span class="font-semibold text-slate-700 group-hover:text-indigo-700">Pekerjaan Tanah</span>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-white text-slate-400 flex items-center justify-center shadow-sm group-hover:text-indigo-600 group-hover:shadow-md transition"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-50 hover:bg-indigo-50/50 transition cursor-pointer group">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-teal-500"></div>
                                <span class="font-semibold text-slate-700 group-hover:text-indigo-700">Pekerjaan Beton</span>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-white text-slate-400 flex items-center justify-center shadow-sm group-hover:text-indigo-600 group-hover:shadow-md transition"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <a href="#" class="block w-full text-center py-3 bg-slate-900 text-white rounded-xl font-bold hover:bg-indigo-600 transition shadow-lg shadow-slate-900/10">Lihat Selengkapnya</a>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-teal-100/50 transition duration-300">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center text-teal-600">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Harga Bangunan</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-50 hover:bg-teal-50/50 transition cursor-pointer group">
                            <div>
                                <div class="font-semibold text-slate-700 group-hover:text-teal-700">Gedung Bertingkat</div>
                                <div class="text-xs text-slate-400 mt-1">Rp 6.2jt / m²</div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-white text-slate-400 flex items-center justify-center shadow-sm group-hover:text-teal-600 group-hover:shadow-md transition"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-50 hover:bg-teal-50/50 transition cursor-pointer group">
                            <div>
                                <div class="font-semibold text-slate-700 group-hover:text-teal-700">Rumah Negara Tp. A</div>
                                <div class="text-xs text-slate-400 mt-1">Rp 5.8jt / m²</div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-white text-slate-400 flex items-center justify-center shadow-sm group-hover:text-teal-600 group-hover:shadow-md transition"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <a href="#" class="block w-full text-center py-3 bg-white border-2 border-slate-200 text-slate-600 rounded-xl font-bold hover:border-teal-500 hover:text-teal-600 transition">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hitung-cepat" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-br from-indigo-900 to-slate-900 rounded-[3rem] shadow-2xl overflow-hidden relative">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-500 rounded-full mix-blend-overlay filter blur-[100px] opacity-30"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-teal-500 rounded-full mix-blend-overlay filter blur-[100px] opacity-20"></div>

                <div class="flex flex-col lg:flex-row relative z-10">
                    <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                        <span class="text-teal-400 font-bold tracking-widest text-xs uppercase mb-4">Kalkulator Pintar</span>
                        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Hitung Biaya Konstruksi <br>Dalam Sekejap.</h2>
                        <p class="text-indigo-200 text-lg mb-10 leading-relaxed">Simulasi biaya pembangunan rumah di Jakarta berdasarkan standar harga resmi. Akurat, cepat, dan transparan.</p>
                        
                        <div class="flex gap-4">
                            <div class="flex -space-x-2">
                                <div class="w-10 h-10 rounded-full bg-white/20 border-2 border-slate-900"></div>
                                <div class="w-10 h-10 rounded-full bg-white/40 border-2 border-slate-900"></div>
                                <div class="w-10 h-10 rounded-full bg-white/60 border-2 border-slate-900"></div>
                            </div>
                            <div class="text-sm text-indigo-200 py-2">Digunakan oleh <span class="text-white font-bold">10rb+ Warga</span></div>
                        </div>
                    </div>

                    <div class="lg:w-1/2 bg-white/10 backdrop-blur-md border-l border-white/10 p-10 lg:p-16" 
                         x-data="{ 
                            luas: '', 
                            selectedModel: { id: 1, name: 'Rumah Sederhana', price: 5500000, icon: 'fa-home' },
                            models: [
                                { id: 1, name: 'Rumah Sederhana', price: 5500000, icon: 'fa-home' },
                                { id: 2, name: 'Rumah Menengah', price: 7500000, icon: 'fa-building' },
                                { id: 3, name: 'Rumah Mewah', price: 12000000, icon: 'fa-gem' },
                                { id: 4, name: 'Gedung 1 Lt', price: 6500000, icon: 'fa-warehouse' },
                                { id: 5, name: 'Gedung 2 Lt', price: 8500000, icon: 'fa-city' }
                            ]
                         }">
                        
                        <div class="space-y-8">
                            <div>
                                <label class="block text-indigo-200 text-sm font-bold mb-4 uppercase tracking-wider">Pilih Tipe</label>
                                <div class="flex gap-3 overflow-x-auto pb-4 snap-x hide-scroll">
                                    <template x-for="model in models" :key="model.id">
                                        <button @click="selectedModel = model" 
                                            :class="{'bg-teal-500 text-white shadow-lg shadow-teal-500/30 scale-105': selectedModel.id === model.id, 'bg-slate-800/50 text-slate-400 hover:bg-slate-700': selectedModel.id !== model.id}" 
                                            class="flex-shrink-0 px-6 py-4 rounded-2xl transition-all duration-300 snap-start border border-white/5 flex flex-col items-center gap-2 min-w-[120px]">
                                            <i class="fas text-xl" :class="model.icon"></i>
                                            <span class="text-xs font-bold" x-text="model.name"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <div>
                                <label class="block text-indigo-200 text-sm font-bold mb-4 uppercase tracking-wider">Luas Bangunan</label>
                                <div class="relative">
                                    <input type="number" x-model="luas" placeholder="0" 
                                        class="w-full px-6 py-5 bg-slate-900/50 border border-white/10 rounded-2xl text-white text-2xl font-bold placeholder-slate-600 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition">
                                    <span class="absolute right-6 top-1/2 -translate-y-1/2 text-slate-500 font-bold">m²</span>
                                </div>
                            </div>

                            <div class="bg-slate-900/80 rounded-2xl p-6 border border-white/5">
                                <div class="text-slate-400 text-xs uppercase tracking-wider mb-1">Estimasi Biaya</div>
                                <div class="text-4xl lg:text-5xl font-black text-white tracking-tight" x-text="luas ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(luas * selectedModel.price) : 'Rp 0'"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pelatihan-tukang" class="py-32 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-indigo-600 font-bold text-xs tracking-widest uppercase mb-3 block">PENGEMBANGAN SDM</span>
                <h2 class="text-4xl font-extrabold text-slate-900">Pelatihan & Sertifikasi</h2>
            </div>

            <div x-data="{ tab: 'jadwal' }">
                <div class="flex justify-center mb-12">
                    <div class="bg-white p-1.5 rounded-full shadow-sm border border-slate-200 inline-flex relative">
                        <button @click="tab = 'jadwal'" :class="{'text-white': tab === 'jadwal', 'text-slate-500 hover:text-slate-900': tab !== 'jadwal'}" class="relative z-10 px-8 py-3 rounded-full font-bold text-sm transition-all duration-300">
                            Jadwal Pelatihan
                        </button>
                        <button @click="tab = 'berita'" :class="{'text-white': tab === 'berita', 'text-slate-500 hover:text-slate-900': tab !== 'berita'}" class="relative z-10 px-8 py-3 rounded-full font-bold text-sm transition-all duration-300">
                            Berita Pelatihan
                        </button>
                        <div class="absolute top-1.5 bottom-1.5 rounded-full bg-indigo-600 transition-all duration-300 ease-out shadow-lg shadow-indigo-500/30"
                             :class="{'left-1.5 w-[160px]': tab === 'jadwal', 'left-[170px] w-[160px]': tab === 'berita'}"
                             style="width: 50%;"></div>
                    </div>
                </div>

                <div x-show="tab === 'jadwal'" x-transition.opacity.duration.500ms>
                    <div class="flex gap-6 overflow-x-auto pb-10 snap-x hide-scroll px-4">
                        <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-indigo-100/50 transition duration-300 snap-center group">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1.5 rounded-full">BUKA</span>
                                <span class="text-slate-400 font-bold text-sm">10 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition">Sertifikasi Tukang Bangunan</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Sertifikasi kompetensi resmi untuk pekerja bangunan tingkat dasar.</p>
                            <button class="w-full py-3.5 rounded-xl border border-indigo-100 text-indigo-600 font-bold hover:bg-indigo-600 hover:text-white transition">Daftar Sekarang</button>
                        </div>
                        <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-indigo-100/50 transition duration-300 snap-center group">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-amber-100 text-amber-700 text-xs font-extrabold px-3 py-1.5 rounded-full">SEGERA</span>
                                <span class="text-slate-400 font-bold text-sm">25 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition">K3 Konstruksi Mandor</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Standar keselamatan kerja wajib bagi mandor lapangan.</p>
                            <button class="w-full py-3.5 rounded-xl border border-indigo-100 text-indigo-600 font-bold hover:bg-indigo-600 hover:text-white transition">Daftar Sekarang</button>
                        </div>
                         <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition duration-300 snap-center opacity-60 grayscale">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-slate-100 text-slate-500 text-xs font-extrabold px-3 py-1.5 rounded-full">TUTUP</span>
                                <span class="text-slate-400 font-bold text-sm">01 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Ahli Manajemen Proyek</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Program lanjutan untuk manajemen proyek skala menengah.</p>
                            <button class="w-full py-3.5 rounded-xl bg-slate-100 text-slate-400 font-bold cursor-not-allowed">Penuh</button>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'berita'" x-cloak>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-indigo-900/0 group-hover:bg-indigo-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-indigo-600 mb-2 uppercase tracking-wider">15 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-indigo-600 transition">Sukses Gelar Sertifikasi 500 Tukang Batu</h3>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-indigo-900/0 group-hover:bg-indigo-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-indigo-600 mb-2 uppercase tracking-wider">10 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-indigo-600 transition">Pelatihan K3 di Proyek MRT Fase 2</h3>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-indigo-900/0 group-hover:bg-indigo-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-indigo-600 mb-2 uppercase tracking-wider">05 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-indigo-600 transition">Workshop Instalasi Listrik Rumah Tangga</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="inline-block border-b-2 border-indigo-600 text-indigo-600 font-bold pb-1 hover:text-indigo-800 transition">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="serba-serbi" class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Serba-Serbi Konstruksi</h2>
                    <p class="text-slate-500 mt-2">Wawasan dan informasi terkini seputar dunia konstruksi.</p>
                </div>
                <a href="#" class="text-slate-900 font-bold hover:text-indigo-600 transition flex items-center">Lihat Semua <i class="fas fa-arrow-right ml-2 text-sm"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1543269664-7eef42226a21?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-indigo-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">WEBINAR</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Rekaman: Green Building Jakarta</h3>
                        </div>
                        <div class="absolute top-5 right-5 w-10 h-10 bg-white/20 backdrop-blur rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1590642916589-592bcaaa3e5a?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">KEGIATAN</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Kunjungan Proyek MRT Fase 2</h3>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-teal-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">INOVASI</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Semen Instan Terbaru</h3>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-violet-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">KOMPETISI</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Lomba Tukang Cat</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-20 rounded-t-[3rem]">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl">B</div>
                        <span class="text-2xl font-bold text-white">Bangun<span class="text-indigo-500">Jakarta</span></span>
                    </div>
                    <p class="leading-relaxed text-slate-500 mb-8 max-w-sm">Mewujudkan pembangunan Jakarta yang transparan, efisien, dan berkualitas melalui teknologi digital.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-indigo-400 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Hitung Cepat</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Harga Satuan</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Pelatihan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-indigo-500"></i>
                            <span>Jl. Taman Jatibaru No.17, Cideng, Jakarta Pusat</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-indigo-500"></i>
                            <span>(021) 3510008</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-indigo-500"></i>
                            <span>dcktrp@jakarta.go.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/5 pt-8 text-center text-sm text-slate-600">
                <p>&copy; 2026 Dinas Cipta Karya, Tata Ruang dan Pertanahan Provinsi DKI Jakarta.</p>
            </div>
        </div>
    </footer>

</body>
</html>