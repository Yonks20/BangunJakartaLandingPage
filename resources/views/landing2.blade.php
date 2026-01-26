<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Jakarta - Sistem Informasi Konstruksi</title>
    
    {{-- Memanggil CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Alpine.js untuk interaksi --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- Google Fonts: Inter --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
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
            <div class="hidden lg:flex space-x-8 font-medium text-sm text-slate-600">
                <a href="#beranda" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#tentang" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="#hitung-cepat" class="hover:text-blue-600 transition">Hitung Cepat</a>
                <a href="#katalog" class="hover:text-blue-600 transition">Katalog</a>
                <a href="#faq" class="hover:text-blue-600 transition">FAQ</a>
            </div>
            <div>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition shadow-lg shadow-blue-600/30 hover:-translate-y-0.5 transform">
                    Masuk / Daftar
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
                Platform terintegrasi untuk menghitung RAB, mencari tenaga kerja bersertifikat, serta memantau harga material konstruksi secara real-time di DKI Jakarta.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#hitung-cepat" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-xl font-semibold transition shadow-lg hover:shadow-blue-600/40 flex items-center justify-center gap-2">
                    <i class="fas fa-calculator"></i> Mulai Hitung RAB
                </a>
                <a href="#tentang" class="bg-white/10 hover:bg-white/20 text-white backdrop-blur-sm px-8 py-3.5 rounded-xl font-semibold transition border border-white/10 flex items-center justify-center gap-2">
                    <i class="fas fa-info-circle"></i> Pelajari Sistem
                </a>
            </div>
        </div>
    </header>

    <section class="relative -mt-20 z-20 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border border-blue-50 group">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hitung Cepat Bangunan</h3>
                <p class="text-slate-500 leading-relaxed text-sm">Estimasi biaya konstruksi instan berdasarkan harga satuan DKI Jakarta tanpa perlu membuat RAB manual.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border border-blue-50 group">
                <div class="w-14 h-14 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Tukang Bersertifikat</h3>
                <p class="text-slate-500 leading-relaxed text-sm">Database tenaga kerja konstruksi terampil dan bersertifikat yang siap bekerja di proyek Anda.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border border-blue-50 group">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Harga Material</h3>
                <p class="text-slate-500 leading-relaxed text-sm">Informasi standar harga satuan bahan bangunan terkini di berbagai wilayah DKI Jakarta.</p>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-20 h-20 bg-blue-100 rounded-full z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-50 rounded-full z-0"></div>
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop" class="relative z-10 rounded-3xl shadow-2xl object-cover h-[400px] w-full border-4 border-white" alt="Diskusi Konstruksi">
                </div>
                <div class="lg:w-1/2">
                    <span class="text-blue-600 font-bold text-sm tracking-wider uppercase mb-2 block">Tentang Kami</span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-6">Apa itu <span class="text-blue-600">Bangun Jakarta?</span></h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Bangun Jakarta merupakan Sistem Informasi jasa konstruksi yang bertujuan untuk memudahkan komunikasi dan koordinasi antar pelaku jasa konstruksi dengan menyediakan data <span class="font-semibold text-slate-900">real-time</span> dan analitik terkait perkembangan proyek serta sumber daya yang tersedia.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-8">
                        Website ini mendukung pengambilan keputusan yang lebih baik dan penting bagi perencanaan strategis untuk mewujudkan transparansi, efisiensi, dan akurasi dalam pengelolaan kegiatan konstruksi di lingkungan Pemprov DKI Jakarta.
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

    <section id="hitung-cepat" class="py-24 bg-blue-50 border-y border-blue-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Hitung Cepat Biaya Konstruksi</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Simulasi biaya pembangunan rumah di Jakarta berdasarkan standar harga pemerintah daerah.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row border border-blue-100">
                <div class="lg:w-7/12 p-8 lg:p-12" x-data="{ luas: '', harga: 5500000, tipe: 'sederhana' }">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Permodelan Bangunan</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <button @click="harga = 5500000; tipe='sederhana'" :class="{'bg-blue-50 border-blue-600 text-blue-700': tipe==='sederhana', 'bg-white border-slate-200 text-slate-600': tipe!=='sederhana'}" class="p-4 border rounded-xl text-left transition hover:border-blue-400">
                                    <div class="font-bold">Rumah Sederhana</div>
                                    <div class="text-xs mt-1">Rp 5.5 Jt / m²</div>
                                </button>
                                <button @click="harga = 7500000; tipe='menengah'" :class="{'bg-blue-50 border-blue-600 text-blue-700': tipe==='menengah', 'bg-white border-slate-200 text-slate-600': tipe!=='menengah'}" class="p-4 border rounded-xl text-left transition hover:border-blue-400">
                                    <div class="font-bold">Rumah Menengah</div>
                                    <div class="text-xs mt-1">Rp 7.5 Jt / m²</div>
                                </button>
                                <button @click="harga = 12000000; tipe='mewah'" :class="{'bg-blue-50 border-blue-600 text-blue-700': tipe==='mewah', 'bg-white border-slate-200 text-slate-600': tipe!=='mewah'}" class="p-4 border rounded-xl text-left transition hover:border-blue-400">
                                    <div class="font-bold">Rumah Mewah</div>
                                    <div class="text-xs mt-1">Rp 12 Jt / m²</div>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Luas Bangunan (m²)</label>
                            <input type="number" x-model="luas" placeholder="Masukkan luas tanah dalam angka..." 
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition text-lg">
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-slate-100 lg:hidden">
                        <div class="text-slate-500 text-sm mb-1">Estimasi Total Biaya</div>
                        <div class="text-3xl font-bold text-blue-600" x-text="luas ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(luas * harga) : 'Rp 0'"></div>
                    </div>
                    
                    <span x-effect="document.getElementById('displayHarga').innerText = luas ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(luas * harga) : 'Rp 0'"></span>
                    <span x-effect="document.getElementById('displayTipe').innerText = tipe === 'sederhana' ? 'Rumah Sederhana' : (tipe === 'menengah' ? 'Rumah Menengah' : 'Rumah Mewah')"></span>
                </div>

                <div class="lg:w-5/12 bg-slate-900 p-8 lg:p-12 text-white flex flex-col justify-center relative overflow-hidden hidden lg:flex">
                    <div class="absolute top-0 right-0 p-32 bg-blue-600 rounded-full blur-[100px] opacity-30"></div>
                    <div class="relative z-10">
                        <h4 class="text-blue-200 text-sm uppercase tracking-wider font-semibold mb-6">Rincian Estimasi</h4>
                        
                        <div class="mb-8">
                            <div class="text-slate-400 text-sm mb-1">Model Bangunan</div>
                            <div class="text-2xl font-bold" id="displayTipe">Rumah Sederhana</div>
                        </div>

                        <div class="mb-10">
                            <div class="text-slate-400 text-sm mb-1">Total Estimasi Biaya</div>
                            <div class="text-4xl font-extrabold text-blue-400" id="displayHarga">Rp 0</div>
                        </div>

                        <button class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded-xl font-bold transition shadow-lg shadow-blue-600/20">
                            Lihat Detail Rincian <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                        <p class="text-xs text-slate-400 mt-4 text-center">*Harga belum termasuk pajak & biaya tak terduga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katalog" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Katalog Konstruksi</h2>
                    <p class="text-slate-500 mt-2">Temukan kebutuhan proyek Anda di sini.</p>
                </div>
                <a href="#" class="hidden md:inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                    Lihat Semua Katalog <i class="fas fa-long-arrow-alt-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="group block">
                    <div class="aspect-square rounded-2xl bg-blue-50 relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Material">
                        <div class="absolute inset-0 bg-blue-900/10 group-hover:bg-blue-900/20 transition"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white/95 text-blue-900 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold shadow-sm">Material</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Bahan Bangunan</h4>
                    <p class="text-sm text-slate-500">Semen, Pasir, Bata, dll.</p>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded-2xl bg-blue-50 relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1581094794329-cd136ce4ebd1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Alat">
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white/95 text-blue-900 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold shadow-sm">Peralatan</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Sewa Alat Berat</h4>
                    <p class="text-sm text-slate-500">Excavator, Crane, dll.</p>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded-2xl bg-blue-50 relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Tenaga Kerja">
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white/95 text-blue-900 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold shadow-sm">SDM</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Tenaga Kerja</h4>
                    <p class="text-sm text-slate-500">Tukang, Mandor, Arsitek.</p>
                </a>
                <a href="#" class="group block">
                    <div class="aspect-square rounded-2xl bg-blue-50 relative overflow-hidden mb-4">
                        <img src="https://plus.unsplash.com/premium_photo-1661962633099-0d268d098e9c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Vendor">
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white/95 text-blue-900 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold shadow-sm">Vendor</span>
                        </div>
                    </div>
                    <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Jasa Vendor</h4>
                    <p class="text-sm text-slate-500">Kontraktor & Konsultan.</p>
                </a>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-blue-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Pertanyaan Yang Sering Diajukan</h2>
                <p class="text-slate-500">Cari tahu lebih lanjut tentang layanan Bangun Jakarta.</p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group">
                        <span class="font-bold text-slate-800 group-hover:text-blue-600 transition">Apa itu Hitung Cepat?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-blue-500" :class="{'rotate-180': active === 1}"></i>
                    </button>
                    <div x-show="active === 1" x-collapse class="bg-blue-50/50 px-6 py-4 text-slate-600 border-t border-blue-50 text-sm leading-relaxed">
                        Hitung Cepat adalah fitur untuk menghitung estimasi biaya konstruksi berdasarkan harga satuan per meter persegi (M²) permodelan bangunan di Jakarta. Fitur ini membantu masyarakat mendapatkan gambaran biaya tanpa perlu menyusun RAB yang rumit.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group">
                        <span class="font-bold text-slate-800 group-hover:text-blue-600 transition">Bagaimana cara mendaftar sebagai tenaga kerja?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-blue-500" :class="{'rotate-180': active === 2}"></i>
                    </button>
                    <div x-show="active === 2" x-collapse class="bg-blue-50/50 px-6 py-4 text-slate-600 border-t border-blue-50 text-sm leading-relaxed">
                        Anda dapat mendaftar melalui menu "Daftar" di pojok kanan atas. Pastikan Anda memiliki sertifikasi kompetensi kerja konstruksi yang masih berlaku untuk diverifikasi oleh tim Bangun Jakarta.
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                    <button @click="active === 3 ? active = null : active = 3" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group">
                        <span class="font-bold text-slate-800 group-hover:text-blue-600 transition">Apakah data harga material selalu update?</span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300 group-hover:text-blue-500" :class="{'rotate-180': active === 3}"></i>
                    </button>
                    <div x-show="active === 3" x-collapse class="bg-blue-50/50 px-6 py-4 text-slate-600 border-t border-blue-50 text-sm leading-relaxed">
                        Ya, data harga material diperbarui secara berkala berdasarkan survei pasar yang dilakukan oleh Dinas Cipta Karya, Tata Ruang dan Pertanahan DKI Jakarta.
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
                        Sistem Informasi jasa konstruksi untuk mewujudkan pembangunan Jakarta yang transparan, efisien, dan berkualitas.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6">Tautan Cepat</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Hitung Cepat</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Katalog Material</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Jadwal Pelatihan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Regulasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-500"></i>
                            <span>Jl. Taman Jatibaru No.17, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, DKI Jakarta 10150</span>
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

            <div class="border-t border-slate-800 pt-8 text-center text-sm text-slate-500">
                <p>&copy; 2026 Dinas Cipta Karya, Tata Ruang dan Pertanahan Provinsi DKI Jakarta. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>