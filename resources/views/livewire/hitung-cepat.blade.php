<div class="bg-gradient-to-br from-blue-900 to-slate-900 rounded-[3rem] shadow-2xl overflow-hidden relative"
     x-data="{ 
        luas: '', 
        selectedModel: { id: 1, name: 'Rumah Sederhana', price: 5500000, icon: 'fa-home', desc: 'Rp 5.5 Jt / m²' },
        
        models: [
            { id: 1, name: 'Rumah Sederhana', price: 5500000, icon: 'fa-home', desc: 'Rp 5.5 Jt / m²' },
            { id: 2, name: 'Rumah Menengah', price: 7500000, icon: 'fa-building', desc: 'Rp 7.5 Jt / m²' },
            { id: 3, name: 'Rumah Mewah', price: 12000000, icon: 'fa-gem', desc: 'Rp 12 Jt / m²' },
            { id: 4, name: 'Gedung 1 Lt', price: 6500000, icon: 'fa-warehouse', desc: 'Rp 6.5 Jt / m²' },
            { id: 5, name: 'Gedung 2 Lt', price: 8500000, icon: 'fa-city', desc: 'Rp 8.5 Jt / m²' },
            { id: 6, name: 'Gudang', price: 4500000, icon: 'fa-box', desc: 'Rp 4.5 Jt / m²' }
        ],

        formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(angka);
        }
     }">
    
    {{-- CSS Khusus: Hilangkan panah di input angka --}}
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
        input[type=number] { -moz-appearance: textfield; }
    </style>

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500 rounded-full mix-blend-overlay filter blur-[100px] opacity-30 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-cyan-500 rounded-full mix-blend-overlay filter blur-[100px] opacity-20 pointer-events-none"></div>

    <div class="flex flex-col lg:flex-row relative z-10">
        <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
            <span class="text-cyan-400 font-bold tracking-widest text-xs uppercase mb-4">Kalkulator Pintar</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Hitung Biaya Konstruksi Anda.</h2>
            <p class="text-blue-200 text-lg mb-10 leading-relaxed">Simulasi biaya pembangunan gedung di Jakarta berdasarkan standar harga per m² yang berlaku di wilayah Jakarta.</p>
            
            <div class="flex gap-4">
              
            </div>
        </div>

        <div class="lg:w-1/2 bg-white/10 backdrop-blur-md border-l border-white/10 p-10 lg:p-16">
            
            <div class="space-y-8">
                <div class="relative group">
                    <label class="block text-blue-200 text-sm font-bold mb-4 uppercase tracking-wider">Pilih Tipe</label>
                    
                    <button @click="$refs.slider.scrollBy({left: -200, behavior: 'smooth'})" type="button" class="absolute left-0 top-1/2 translate-y-2 z-20 bg-white text-blue-600 w-8 h-8 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-50 transition hidden md:flex">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div x-ref="slider" class="flex gap-3 overflow-x-auto pb-4 snap-x custom-scroll scroll-smooth px-2">
                        <template x-for="model in models" :key="model.id">
                            <button 
                                @click="selectedModel = model"
                                type="button"
                                :class="selectedModel.id === model.id ? 'bg-orange-500 text-white shadow-lg shadow-orange-900/50 scale-105 border-orange-700' : 'bg-slate-800/50 text-slate-400 hover:bg-slate-700 border-white/5'"
                                class="flex-shrink-0 px-6 py-4 rounded-2xl transition-all duration-300 snap-start border flex flex-col items-center gap-2 min-w-[140px]">
                                <i class="fas text-xl" :class="model.icon"></i>
                                <span class="text-xs font-bold text-center" x-text="model.name"></span>
                            </button>
                        </template>
                    </div>

                    <button @click="$refs.slider.scrollBy({left: 200, behavior: 'smooth'})" type="button" class="absolute right-0 top-1/2 translate-y-2 z-20 bg-white text-blue-600 w-8 h-8 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-50 transition hidden md:flex">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div>
                    <label class="block text-blue-200 text-sm font-bold mb-4 uppercase tracking-wider">Luas Bangunan</label>
                    <div class="relative">
                        <input 
                            type="number" 
                            x-model="luas"
                            placeholder="0" 
                            class="appearance-none w-full px-6 py-5 bg-slate-900/50 border border-white/10 rounded-2xl text-white text-2xl font-bold placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                        <span class="absolute right-6 top-1/2 -translate-y-1/2 text-slate-500 font-bold pointer-events-none">m²</span>
                    </div>
                </div>

                <div class="bg-slate-900/80 rounded-2xl p-6 border border-white/5">
                    <div class="text-slate-400 text-xs uppercase tracking-wider mb-2">Estimasi Biaya</div>
                    
                    <div class="text-white font-bold text-lg mb-1" x-text="selectedModel.name"></div>
                    <div class="text-cyan-400 text-sm font-mono mb-4" x-text="selectedModel.desc"></div>
                    
                    <div class="text-4xl lg:text-5xl font-black text-white tracking-tight" x-text="luas ? formatRupiah(luas * selectedModel.price) : 'Rp 0'"></div>

                    <div x-show="luas > 0" x-transition.opacity class="mt-6">
                        <button class="w-full py-3 bg-white/10 hover:bg-white/20 border border-white/20 rounded-xl text-white font-semibold transition flex items-center justify-center gap-2 group">
                            <i class="fas fa-info-circle text-cyan-400 group-hover:text-white transition"></i> 
                            Lihat Detail Spesifikasi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>