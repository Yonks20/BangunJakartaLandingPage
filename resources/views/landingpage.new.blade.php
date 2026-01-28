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
    {{-- Google Fonts: Plus Jakarta Sans --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Custom Scrollbar Blue */
        .custom-scroll::-webkit-scrollbar { height: 8px; }
        .custom-scroll::-webkit-scrollbar-track { background: #eff6ff; border-radius: 10px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #3b82f6; border-radius: 10px; }
        .custom-scroll::-webkit-scrollbar-thumb:hover { background: #2563eb; }
    </style>

    @livewireStyles
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-500 selection:text-white">

    <div class="fixed top-0 w-full z-50 px-4 py-4">
        <nav class="bg-white/90 backdrop-blur-lg shadow-lg shadow-blue-900/5 rounded-full max-w-6xl mx-auto border border-white/50 px-6 py-3 flex justify-between items-center transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-blue-500/30 shadow-lg">B</div>
                <div class="leading-tight">
                    <span class="block text-lg font-bold tracking-tight text-slate-900">Bangun<span class="text-blue-600">Jakarta</span></span>
                </div>
            </div>
            <div class="hidden lg:flex bg-slate-50 rounded-full px-2 py-1 border border-slate-200/50">
                <a href="#beranda" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-white rounded-full transition-all">Beranda</a>
                <a href="#harga-satuan" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-white rounded-full transition-all">Harga</a>
                <a href="#hitung-cepat" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-white rounded-full transition-all">Hitung</a>
                <a href="#pelatihan-tukang" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-white rounded-full transition-all">Pelatihan</a>
                <a href="#katalog" class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 hover:bg-white rounded-full transition-all">Katalog</a>
            </div>
            <div>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full text-sm font-bold transition shadow-lg shadow-blue-600/20 hover:-translate-y-0.5 transform">
                    Masuk
                </a>
            </div>
        </nav>
    </div>

    <header id="beranda" class="relative pt-40 pb-32 lg:pt-52 lg:pb-48 bg-slate-900 overflow-hidden rounded-b-[3rem]">
        <div class="absolute top-0 -left-40 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 -right-40 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-40 left-20 w-96 h-96 bg-sky-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-10 mix-blend-overlay" alt="Jakarta Skyline">
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1.5 px-4 rounded-full bg-blue-900/30 backdrop-blur-md border border-blue-500/30 text-blue-300 text-xs font-bold tracking-wider mb-6 shadow-xl">
                ✨ SISTEM INFORMASI JASA KONSTRUKSI
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight">
                Portal Satu Data <br> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-400 to-sky-300">Layanan Jasa Konstruksi Jakarta.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed font-light">
                Satu platform untuk semua kebutuhan: Cek harga material wilayah Jakarta, hitung estimasi biaya bangunan, dan temukan tenaga kerja bersertifikat di DKI Jakarta.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#hitung-cepat" class="group bg-blue-600 text-white px-8 py-4 rounded-full font-bold transition shadow-lg shadow-blue-600/40 hover:bg-blue-500 hover:scale-105 flex items-center justify-center gap-2">
                    <i class="fas fa-calculator group-hover:rotate-12 transition"></i> Mulai Hitung RAB
                </a>
                <a href="#katalog" class="bg-white/5 hover:bg-white/10 text-white backdrop-blur-sm px-8 py-4 rounded-full font-bold transition border border-white/10 flex items-center justify-center gap-2">
                    <i class="fas fa-search"></i> Lihat Katalog
                </a>
            </div>
        </div>
    </header>

    <section class="relative -mt-20 z-20 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-blue-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hitung Cepat</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Estimasi biaya konstruksi instan dengan algoritma cerdas berbasis data Pemprov DKI.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-blue-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-cyan-50 text-cyan-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-cyan-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tukang Pro</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Database tenaga kerja tersertifikasi, siap bekerja dengan standar profesional tinggi.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl shadow-blue-900/5 border border-white/50 hover:-translate-y-2 transition duration-300 group">
                <div class="w-14 h-14 bg-sky-50 text-sky-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Harga Material</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Transparansi harga satuan bahan bangunan terkini di seluruh wilayah Jakarta.</p>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-24 bg-blue-50/50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-20 h-20 bg-blue-100 rounded-full z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-cyan-100 rounded-full z-0"></div>
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop" class="relative z-10 rounded-3xl shadow-2xl object-cover h-[400px] w-full border-4 border-white" alt="Diskusi Konstruksi">
                </div>
                <div class="lg:w-1/2">
                    <span class="text-blue-600 font-bold text-sm tracking-wider uppercase mb-2 block">Tentang Kami</span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-6">Apa itu <span class="text-blue-600">Bangun Jakarta?</span></h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Bangun Jakarta merupakan Sistem Informasi jasa konstruksi yang bertujuan untuk memudahkan komunikasi dan koordinasi antar pelaku jasa konstruksi dengan menyediakan data <span class="font-semibold text-slate-900">real-time</span>.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-slate-700">Integrasi data pelaku jasa konstruksi & regulasi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-slate-700">Transparansi harga satuan pekerjaan dan material.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="harga-satuan" class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <span class="text-blue-600 font-bold text-xs tracking-widest uppercase mb-3 block">TRANSPARANSI DATA</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Standar Harga Satuan</h2>
                    <p class="text-slate-500 mt-2 max-w-xl">Acuan resmi untuk kegiatan konstruksi di DKI Jakarta.</p>
                </div>
                <a href="#" class="group flex items-center gap-2 text-blue-600 font-bold hover:text-blue-800 transition">
                    Lihat Data Lengkap <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-50 rounded-[2rem] p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-blue-100/50 transition duration-300 group">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 group-hover:scale-110 transition">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Harga Satuan Pekerjaan</h3>
                    </div>
                    <p class="text-slate-600 mb-8 text-sm leading-relaxed">Analisa harga satuan untuk pekerjaan persiapan, struktur, arsitektur, hingga mekanikal.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white hover:bg-blue-50 transition cursor-pointer group/item border border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                <span class="font-semibold text-slate-700 group-hover/item:text-blue-700">Pekerjaan Tanah</span>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shadow-sm group-hover/item:text-blue-600"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white hover:bg-blue-50 transition cursor-pointer group/item border border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-cyan-500"></div>
                                <span class="font-semibold text-slate-700 group-hover/item:text-blue-700">Pekerjaan Beton</span>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shadow-sm group-hover/item:text-blue-600"><i class="fas fa-chevron-right text-xs"></i></button>
                        </div>
                         <div class="mt-auto">
                        <a href="#" class="block w-full py-3.5 rounded-xl border border-blue-200 text-blue-600 font-bold text-center text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition duration-300 shadow-sm">
                            Klik untuk lihat lainnya
                        </a>
                    </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-[2rem] p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-cyan-100/50 transition duration-300 group">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 group-hover:scale-110 transition">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Harga Satuan Bangunan</h3>
                    </div>
                    <p class="text-slate-600 mb-8 text-sm leading-relaxed">Standar harga per meter persegi untuk Bangunan Gedung Negara (BGN) dan perumahan.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white hover:bg-cyan-50/50 transition cursor-pointer group/item border border-slate-100">
                            <div>
                                <div class="font-semibold text-slate-700 group-hover/item:text-cyan-700">Gedung Bertingkat</div>
                                <div class="text-xs text-slate-400 mt-1">Rp 6.2jt / m²</div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shadow-sm group-hover/item:text-cyan-600"><i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white hover:bg-cyan-50/50 transition cursor-pointer group/item border border-slate-100">
                            <div>
                                <div class="font-semibold text-slate-700 group-hover/item:text-cyan-700">Rumah Negara Tp. A</div>
                                <div class="text-xs text-slate-400 mt-1">Rp 5.8jt / m²</div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shadow-sm group-hover/item:text-cyan-600"><i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                     <div class="mt-auto">
                        <a href="#" class="block w-full py-3.5 rounded-xl border border-blue-200 text-blue-600 font-bold text-center text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition duration-300 shadow-sm">
                            Klik untuk lihat lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="hitung-cepat" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            @include('livewire.hitung-cepat')
        </div>
    </section>

    <section id="pelatihan-tukang" class="py-32 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold text-xs tracking-widest uppercase mb-3 block">PENGEMBANGAN SDM</span>
                <h2 class="text-4xl font-extrabold text-slate-900">Pelatihan & Sertifikasi</h2>
                <p class="text-slate-500 mt-2">Tingkatkan kompetensi dan sertifikasi tenaga kerja konstruksi.</p>
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
                        <div class="absolute top-1.5 bottom-1.5 rounded-full bg-blue-600 transition-all duration-300 ease-out shadow-lg shadow-blue-500/30"
                             :class="{'left-1.5 w-[160px]': tab === 'jadwal', 'left-[170px] w-[160px]': tab === 'berita'}"
                             style="width: 50%;"></div>
                    </div>
                </div>

                <div x-show="tab === 'jadwal'" x-transition.opacity.duration.500ms class="relative group">
                    <button @click="$refs.trainSlider.scrollBy({left: -320, behavior: 'smooth'})" class="absolute -left-4 top-1/2 -translate-y-1/2 z-20 bg-white text-blue-600 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition border border-slate-100 hidden md:flex">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div x-ref="trainSlider" class="flex gap-6 overflow-x-auto pb-10 snap-x custom-scroll px-4 scroll-smooth">
                        <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-blue-100/50 transition duration-300 snap-center group flex-shrink-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1.5 rounded-full">BUKA</span>
                                <span class="text-slate-400 font-bold text-sm">10 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition">Sertifikasi Tukang Bangunan</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Sertifikasi kompetensi resmi untuk pekerja bangunan tingkat dasar.</p>
                            <button class="w-full py-3.5 rounded-xl border border-blue-100 text-blue-600 font-bold hover:bg-blue-600 hover:text-white transition">Daftar Sekarang</button>
                        </div>
                        <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-blue-100/50 transition duration-300 snap-center group flex-shrink-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-amber-100 text-amber-700 text-xs font-extrabold px-3 py-1.5 rounded-full">SEGERA</span>
                                <span class="text-slate-400 font-bold text-sm">25 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition">K3 Konstruksi Mandor</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Standar keselamatan kerja wajib bagi mandor lapangan.</p>
                            <button class="w-full py-3.5 rounded-xl border border-blue-100 text-blue-600 font-bold hover:bg-blue-600 hover:text-white transition">Daftar Sekarang</button>
                        </div>
                         <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition duration-300 snap-center opacity-60 grayscale flex-shrink-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-slate-100 text-slate-500 text-xs font-extrabold px-3 py-1.5 rounded-full">TUTUP</span>
                                <span class="text-slate-400 font-bold text-sm">01 Feb</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Ahli Manajemen Proyek</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Program lanjutan untuk manajemen proyek skala menengah.</p>
                            <button class="w-full py-3.5 rounded-xl bg-slate-100 text-slate-400 font-bold cursor-not-allowed">Penuh</button>
                        </div>
                         <div class="min-w-[320px] md:w-1/3 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-blue-100/50 transition duration-300 snap-center group flex-shrink-0">
                            <div class="flex justify-between items-start mb-6">
                                <span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1.5 rounded-full">BUKA</span>
                                <span class="text-slate-400 font-bold text-sm">15 Mar</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition">Instalasi Listrik Dasar</h3>
                            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Pelatihan dasar kelistrikan rumah tangga yang aman.</p>
                            <button class="w-full py-3.5 rounded-xl border border-blue-100 text-blue-600 font-bold hover:bg-blue-600 hover:text-white transition">Daftar Sekarang</button>
                        </div>
                    </div>

                    <button @click="$refs.trainSlider.scrollBy({left: 320, behavior: 'smooth'})" class="absolute -right-4 top-1/2 -translate-y-1/2 z-20 bg-white text-blue-600 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition border border-slate-100 hidden md:flex">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div x-show="tab === 'berita'" x-cloak>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-blue-600 mb-2 uppercase tracking-wider">15 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-blue-600 transition">Sukses Gelar Sertifikasi 500 Tukang Batu</h3>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-blue-600 mb-2 uppercase tracking-wider">10 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-blue-600 transition">Pelatihan K3 di Proyek MRT Fase 2</h3>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="rounded-2xl overflow-hidden mb-4 relative">
                                <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition duration-300"></div>
                            </div>
                            <div class="text-xs font-bold text-blue-600 mb-2 uppercase tracking-wider">05 Jan 2026</div>
                            <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-blue-600 transition">Workshop Instalasi Listrik Rumah Tangga</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="inline-block border-b-2 border-blue-600 text-blue-600 font-bold pb-1 hover:text-blue-800 transition">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katalog" class="py-32 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Katalog Konstruksi</h2>
                    <p class="text-slate-600 mt-2">Direktori lengkap kebutuhan proyek Anda.</p>
                </div>
                <a href="#" class="hidden md:inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition uppercase tracking-wider text-sm">
                    Lihat Semua Katalog <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 h-80">
                    <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="Material">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/40 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6">
                        <div class="bg-blue-600 w-10 h-10 rounded-lg flex items-center justify-center text-white mb-3 shadow-lg group-hover:scale-110 transition">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-1">Bahan Bangunan</h4>
                        <p class="text-blue-200 text-xs line-clamp-2">Semen, pasir, bata, baja, dan material dasar lainnya.</p>
                    </div>
                </a>
                <a href="#" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 h-80">
                    <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="Alat">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/40 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6">
                        <div class="bg-cyan-600 w-10 h-10 rounded-lg flex items-center justify-center text-white mb-3 shadow-lg group-hover:scale-110 transition">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-1">Sewa Alat Berat</h4>
                        <p class="text-blue-200 text-xs line-clamp-2">Excavator, crane, dump truck, dan peralatan berat.</p>
                    </div>
                </a>
                <a href="#" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 h-80">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=600&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="SDM">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/40 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6">
                        <div class="bg-sky-600 w-10 h-10 rounded-lg flex items-center justify-center text-white mb-3 shadow-lg group-hover:scale-110 transition">
                            <i class="fas fa-user-hard-hat"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-1">Tenaga Kerja</h4>
                        <p class="text-blue-200 text-xs line-clamp-2">Tukang ahli, mandor, insinyur sipil, dan arsitek.</p>
                    </div>
                </a>
                <a href="#" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500 h-80">
                    <img src="https://plus.unsplash.com/premium_photo-1661962633099-0d268d098e9c?q=80&w=600&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="Jasa">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/40 to-transparent opacity-80 group-hover:opacity-90 transition"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6">
                        <div class="bg-indigo-600 w-10 h-10 rounded-lg flex items-center justify-center text-white mb-3 shadow-lg group-hover:scale-110 transition">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-1">Jasa Konstruksi</h4>
                        <p class="text-blue-200 text-xs line-clamp-2">Kontraktor, konsultan perencana, dan sub-kontraktor.</p>
                    </div>
                </a>
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
                <a href="#" class="text-slate-900 font-bold hover:text-blue-600 transition flex items-center">Lihat Semua <i class="fas fa-arrow-right ml-2 text-sm"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1543269664-7eef42226a21?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">WEBINAR</span>
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
                            <span class="bg-cyan-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">KEGIATAN</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Kunjungan Proyek MRT Fase 2</h3>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-sky-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">INOVASI</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Semen Instan Terbaru</h3>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-5 relative shadow-lg shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=400&auto=format&fit=crop" class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5">
                            <span class="bg-indigo-600 text-white text-[10px] font-bold px-2 py-1 rounded mb-2 inline-block">KOMPETISI</span>
                            <h3 class="text-white font-bold text-lg leading-tight">Lomba Tukang Cat</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Pertanyaan Umum (FAQ)</h2>
            </div>
            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none group hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900 group-hover:text-blue-600 transition">Apa itu fitur Hitung Cepat?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-blue-500" :class="{'rotate-180': active === 1}"></i>
                    </button>
                    <div x-show="active === 1" x-collapse class="px-6 py-5 text-slate-600 bg-slate-50 border-t border-slate-100 text-sm leading-relaxed">
                        Fitur simulasi biaya konstruksi instan yang dirancang untuk membantu masyarakat mendapatkan estimasi awal tanpa perlu membuat RAB manual yang rumit, berdasarkan standar harga Pemprov DKI.
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm border border-slate-200 overflow-hidden">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none group hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900 group-hover:text-blue-600 transition">Dari mana sumber data harga satuan?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-blue-500" :class="{'rotate-180': active === 2}"></i>
                    </button>
                    <div x-show="active === 2" x-collapse class="px-6 py-5 text-slate-600 bg-slate-50 border-t border-slate-100 text-sm leading-relaxed">
                        Data diambil langsung dari hasil survei pasar dan analisa resmi yang dilakukan secara berkala oleh Dinas Cipta Karya, Tata Ruang dan Pertanahan Provinsi DKI Jakarta.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 border-t border-slate-200 bg-slate-50">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-8">Kolaborasi Bersama</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70">
                <div class="flex items-center gap-2 grayscale hover:grayscale-0 transition duration-300 cursor-pointer group">
                    <i class="fas fa-landmark text-3xl text-slate-600 group-hover:text-blue-600"></i>
                    <span class="font-bold text-slate-600 text-lg group-hover:text-blue-600">PEMPROV DKI</span>
                </div>
                <div class="flex items-center gap-2 grayscale hover:grayscale-0 transition duration-300 cursor-pointer group">
                    <i class="fas fa-building text-3xl text-slate-600 group-hover:text-yellow-500"></i>
                    <span class="font-bold text-slate-600 text-lg group-hover:text-yellow-500">KemenPUPR</span>
                </div>
                <div class="flex items-center gap-2 grayscale hover:grayscale-0 transition duration-300 cursor-pointer group">
                    <i class="fas fa-hard-hat text-3xl text-slate-600 group-hover:text-orange-500"></i>
                    <span class="font-bold text-slate-600 text-lg group-hover:text-orange-500">LPJK</span>
                </div>
                <div class="flex items-center gap-2 grayscale hover:grayscale-0 transition duration-300 cursor-pointer group">
                    <i class="fas fa-certificate text-3xl text-slate-600 group-hover:text-red-500"></i>
                    <span class="font-bold text-slate-600 text-lg group-hover:text-red-500">BNSP</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-20 rounded-t-[3rem]">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">B</div>
                        <span class="text-2xl font-bold text-white">Bangun<span class="text-blue-500">Jakarta</span></span>
                    </div>
                    <p class="leading-relaxed text-slate-500 mb-8 max-w-sm">Mewujudkan pembangunan Jakarta yang transparan, efisien, dan berkualitas melalui teknologi digital.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-blue-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-blue-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-blue-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Hitung Cepat</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Harga Satuan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Pelatihan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-500"></i>
                            <span>Jl. Taman Jatibaru No.17, Cideng, Jakarta Pusat</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-500"></i>
                            <span>(021) 3510008</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-500"></i>
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

    @livewireScripts

</body>
</html>