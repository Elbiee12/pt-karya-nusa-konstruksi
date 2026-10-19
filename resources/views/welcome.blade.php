<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Karya Nusa Konstruksi - Presisi Arsitektur &amp; Konstruksi</title>
    
    <!-- Favicon Logo (Ikon Tab Browser) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='15' fill='%230f172a'/><path d='M75 80V25a7.5 7.5 0 0 0-7.5-7.5h-35A7.5 7.5 0 0 0 25 25v55m50 0h7.5m-7.5 0h-18.75m-33.75 0H16.25m7.5 0h18.75m0 0h15m-15 0V42.5m0 0h15' fill='none' stroke='%23ffffff' stroke-width='6' stroke-linecap='round' stroke-linejoin='round'/></svg>">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-100% / 3)); }
        }

        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 30s linear infinite;
            will-change: transform;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }

        /* Pola Garis Blueprint Arsitektur Teknis yang Bersih */
        .blueprint-bg {
            background-color: #f8fafc;
            background-image: 
                linear-gradient(to right, rgba(15, 23, 42, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(15, 23, 42, 0.05) 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased selection:bg-slate-900 selection:text-white overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3.5 group">
                <div class="w-11 h-11 bg-slate-900 text-white flex items-center justify-center shadow-md border border-slate-800 transition-transform group-hover:scale-105">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4" />
                    </svg>
                </div>
                <div>
                    <span class="block text-lg font-extrabold tracking-tight text-slate-900 uppercase leading-none">Karya Nusa</span>
                    <span class="text-[10px] tracking-[0.25em] text-slate-500 uppercase font-bold">Konstruksi</span>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#beranda" class="hover:text-slate-900 transition-colors">Beranda</a>
                <a href="#tentang" class="hover:text-slate-900 transition-colors">Tentang Kami</a>
                <a href="#layanan" class="hover:text-slate-900 transition-colors">Layanan</a>
                <a href="#kalkulator" class="hover:text-slate-900 transition-colors">Kalkulator Biaya</a>
                <a href="#interactive-lab" class="hover:text-slate-900 transition-colors">Visualizer</a>
                <a href="#proyek" class="hover:text-slate-900 transition-colors">Proyek</a>
                <a href="#fitur-baru" class="hover:text-slate-900 transition-colors">Konsultasi</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="#rfq" class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 font-bold text-xs uppercase tracking-wider transition-all shadow-sm">
                    Minta Penawaran
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative min-h-screen pt-32 pb-20 flex items-center border-b border-slate-200 bg-gradient-to-b from-slate-50/50 to-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-8" data-aos="fade-right" data-aos-duration="800">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-slate-100 border border-slate-300 text-slate-700 text-xs font-semibold tracking-widest uppercase">
                    <span class="w-2 h-2 bg-slate-900 rounded-full animate-ping"></span>
                    Kontraktor &amp; Arsitektur Profesional
                </div>

                <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1]">
                    Membangun Presisi. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-700 via-slate-900 to-slate-500">Mewujudkan Estetika.</span>
                </h1>

                <p class="text-slate-600 text-base sm:text-lg max-w-xl font-normal leading-relaxed">
                    PT Karya Nusa Konstruksi menghadirkan solusi pembangunan terpadu mulai dari perencanaan arsitektur, rekayasa struktur, hingga eksekusi konstruksi berkualifikasi tinggi.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#kalkulator" class="bg-slate-900 hover:bg-slate-800 text-white font-bold px-7 py-3.5 text-sm uppercase tracking-wider transition-all shadow-md">
                        Simulasi Biaya Proyek
                    </a>
                    <a href="#proyek" class="border border-slate-300 hover:border-slate-400 text-slate-700 bg-white font-medium px-7 py-3.5 text-sm transition-all shadow-sm">
                        Lihat Portofolio
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-duration="800">
                <div class="relative border border-slate-200 p-3 bg-white shadow-xl">
                    <img 
                        src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80" 
                        alt="Gedung Arsitektur PT Karya Nusa Konstruksi" 
                        class="w-full h-[420px] object-cover filter grayscale contrast-105 hover:grayscale-0 transition-all duration-700 shadow-inner"
                    >
                    <div class="absolute -bottom-6 -left-6 bg-white border border-slate-200 p-5 hidden sm:block shadow-xl" data-aos="fade-up" data-aos-duration="600">
                        <p class="text-3xl font-extrabold text-slate-900">100%</p>
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-semibold mt-1">Komitmen K3 &amp; Mutu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG KAMI -->
    <section id="tentang" class="py-24 border-b border-slate-200 bg-slate-50/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 space-y-6" data-aos="fade-right" data-aos-duration="800">
                    <span class="text-slate-700 text-xs font-bold uppercase tracking-[0.2em]">Tentang Kami</span>
                    <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Dedikasi dalam Setiap Detail Bangunan</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Kami berdiri dengan fondasi keahlian teknis dan pendekatan arsitektur modern. Setiap proyek dikelola secara terstruktur dengan standar K3 ketat, transparansi estimasi biaya, dan pemilihan material bermutu tinggi.
                    </p>
                </div>

                <div class="lg:col-span-7 grid sm:grid-cols-3 gap-6">
                    <div class="p-6 bg-white border border-slate-200 shadow-sm" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                        <div class="text-3xl font-extrabold text-slate-900 mb-2">10+</div>
                        <div class="text-sm font-semibold text-slate-800">Tahun Pengalaman</div>
                        <div class="text-xs text-slate-500 mt-1">Praktik konstruksi profesional.</div>
                    </div>
                    <div class="p-6 bg-white border border-slate-200 shadow-sm" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="text-3xl font-extrabold text-slate-900 mb-2"><?php echo isset($projects) ? count($projects) : '50+'; ?></div>
                        <div class="text-sm font-semibold text-slate-800">Proyek Selesai</div>
                        <div class="text-xs text-slate-500 mt-1">Gedung, komersial &amp; sipil.</div>
                    </div>
                    <div class="p-6 bg-white border border-slate-200 shadow-sm" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                        <div class="text-3xl font-extrabold text-slate-900 mb-2">100%</div>
                        <div class="text-sm font-semibold text-slate-800">Standar K3</div>
                        <div class="text-xs text-slate-500 mt-1">Keselamatan kerja prioritas utama.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN KAMI -->
    <section id="layanan" class="py-24 border-b border-slate-200 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-4" data-aos="fade-right" data-aos-duration="800">
                <div>
                    <span class="text-slate-700 text-xs font-bold uppercase tracking-[0.2em]">Layanan Kami</span>
                    <h2 class="text-3xl font-bold text-slate-900 tracking-tight mt-2">Solusi Konstruksi Menyeluruh</h2>
                </div>
                <p class="text-slate-600 text-sm max-w-md">Layanan terintegrasi yang disesuaikan dengan kebutuhan spesifikasi teknis dan anggaran proyek Anda.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php if (isset($services) && count($services) > 0): ?>
                    <?php foreach ($services as $service): ?>
                    <div class="p-8 bg-slate-50 border border-slate-200 hover:border-slate-400 transition-all duration-300 group shadow-sm flex flex-col justify-between" data-aos="fade-up" data-aos-duration="800">
                        <div>
                            <div class="w-12 h-12 bg-white text-slate-900 border border-slate-200 flex items-center justify-center mb-6 group-hover:bg-slate-900 group-hover:text-white transition-colors shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4" /></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition-colors"><?php echo $service->title; ?></h3>
                            <p class="text-slate-600 text-xs leading-relaxed"><?php echo $service->description; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="p-8 bg-slate-50 border border-slate-200 shadow-sm" data-aos="fade-up" data-aos-duration="600">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Konstruksi Gedung &amp; Commercial</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Pembangunan gedung bertingkat, perkantoran, dan komersial dengan standar K3 tinggi.</p>
                    </div>
                    <div class="p-8 bg-slate-50 border border-slate-200 shadow-sm" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Perencanaan Arsitektur &amp; BIM</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Perancangan gambar kerja 3D dan pemodelan BIM untuk akurasi estimasi material.</p>
                    </div>
                    <div class="p-8 bg-slate-50 border border-slate-200 shadow-sm" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Infrastruktur &amp; Rekayasa Sipil</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Pekerjaan tanah, perkerasan jalan, drainase, dan fondasi berat kawasan publik.</p>
                    </div>
                    <div class="p-8 bg-slate-50 border border-slate-200 shadow-sm" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Renovasi &amp; Fit-Out Interior</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Transformasi arsitektur interior dan penataan ruang komersial/hunian eksklusif.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- KALKULATOR ESTIMASI BIAYA -->
    <section id="kalkulator" class="py-24 border-b border-slate-200 bg-slate-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-down" data-aos-duration="800">
                <span class="text-slate-400 text-xs font-bold uppercase tracking-[0.2em]">Interactive Tool</span>
                <h2 class="text-3xl font-bold tracking-tight mt-2">Simulasi Estimasi Anggaran Proyek</h2>
                <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                    Hitung perkiraan kebutuhan biaya pembangunan Anda secara instan berdasarkan spesifikasi luas dan kualifikasi mutu material.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-10 bg-slate-950 p-8 sm:p-12 border border-slate-800 shadow-2xl" data-aos="zoom-in" data-aos-duration="800">
                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Jenis Bangunan</label>
                        <select id="calcType" onchange="calculateBudget()" class="w-full bg-slate-900 border border-slate-700 text-white px-4 py-3 text-sm focus:border-white focus:outline-none">
                            <option value="3500000">Rumah Tinggal Minimalis (Rp 3.5 Juta / m²)</option>
                            <option value="4500000">Rumah Mewah Modern (Rp 4.5 Juta / m²)</option>
                            <option value="5500000" selected>Gedung Perkantoran / Komersial (Rp 5.5 Juta / m²)</option>
                            <option value="6500000">Ruko &amp; Area Publik High-End (Rp 6.5 Juta / m²)</option>
                        </select>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">
                            <span>Perkiraan Luas Bangunan</span>
                            <span id="areaValue" class="text-white font-extrabold">250 m²</span>
                        </div>
                        <input type="range" id="calcArea" min="30" max="1000" value="250" step="10" oninput="calculateBudget()" class="w-full accent-white bg-slate-800 h-2 cursor-pointer">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Kualifikasi Finishing &amp; Material</label>
                        <div class="grid grid-cols-3 gap-3">
                            <button type="button" onclick="setQuality(1.0, this)" class="quality-btn active bg-white text-slate-900 font-bold py-3 text-xs border border-white">Standard</button>
                            <button type="button" onclick="setQuality(1.25, this)" class="quality-btn bg-slate-900 text-slate-300 font-bold py-3 text-xs border border-slate-800 hover:border-slate-600">Premium</button>
                            <button type="button" onclick="setQuality(1.5, this)" class="quality-btn bg-slate-900 text-slate-300 font-bold py-3 text-xs border border-slate-800 hover:border-slate-600">Luxury / Exclusive</button>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-slate-900 p-8 border border-slate-800 flex flex-col justify-between text-center lg:text-left">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500">Estimasi Total Investasi</span>
                        <p id="totalCostDisplay" class="text-3xl sm:text-4xl font-extrabold text-white mt-3">Rp 1.375.000.000</p>
                        <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                            *Estimasi acuan awal termasuk struktur dasar, finishing standar, dan manajemen proyek profesional.
                        </p>
                    </div>

                    <a href="#rfq" onclick="fillRfqFromCalc()" class="mt-8 bg-white hover:bg-slate-200 text-slate-900 font-bold py-4 text-center text-xs uppercase tracking-widest transition-all">
                        Gunakan Anggaran Ini Dalam RFQ &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MATERIAL VISUALIZER -->
    <section id="interactive-lab" class="py-24 border-b border-slate-200 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-16 gap-6" data-aos="fade-right" data-aos-duration="800">
                <div>
                    <span class="text-slate-700 text-xs font-bold uppercase tracking-[0.2em]">Architectural Studio</span>
                    <h2 class="text-3xl font-bold text-slate-900 tracking-tight mt-2">Eksplorasi Material &amp; Estetika Fasad</h2>
                </div>
                <p class="text-slate-600 text-sm max-w-md">
                    Uji coba kombinasi tekstur material fasad arsitektur modern secara langsung untuk melihat dampaknya pada kesan visual bangunan.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-8 items-stretch" data-aos="fade-up" data-aos-duration="800">
                <div class="lg:col-span-8 relative bg-white border border-slate-200 p-3 shadow-md flex items-center justify-center">
                    <div class="relative w-full h-[450px] overflow-hidden bg-slate-100">
                        <img id="facadePreview" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop" alt="Fasad Arsitektur" class="w-full h-full object-cover transition-all duration-700 filter contrast-105">
                        <div class="absolute top-4 left-4 bg-slate-900/90 backdrop-blur-md text-white text-[11px] font-bold px-4 py-2 border border-slate-700 uppercase tracking-widest shadow-md">
                            MATERIAL: <span id="materialNameDisplay" class="text-slate-300">BETON EKSPOS &amp; SLATE</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col justify-between py-1 space-y-4">
                    <p class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-1">Pilih Tekstur Material Fasad:</p>
                    
                    <div class="space-y-3">
                        <button type="button" onclick="changeMaterial('BETON EKSPOS &amp; SLATE', 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop', this)" class="material-btn active w-full p-5 bg-slate-900 text-white font-bold text-xs uppercase text-left border border-slate-900 flex justify-between items-center transition-all duration-300 shadow-sm rounded-none">
                            <span class="tracking-wide">BETON EKSPOS &amp; SLATE</span>
                            <span class="indicator-dot w-3 h-3 bg-white rounded-full transition-all"></span>
                        </button>

                        <button type="button" onclick="changeMaterial('KACA TEMPERED &amp; PLATINUM', 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200&auto=format&fit=crop', this)" class="material-btn w-full p-5 bg-slate-50 hover:bg-slate-100 text-slate-700 font-bold text-xs uppercase text-left border border-slate-200/80 flex justify-between items-center transition-all duration-300 rounded-none">
                            <span class="tracking-wide">KACA TEMPERED &amp; PLATINUM</span>
                            <span class="indicator-dot w-3 h-3 bg-slate-300 rounded-full transition-all"></span>
                        </button>

                        <button type="button" onclick="changeMaterial('AKSEN KAYU &amp; NATURAL STONE', 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=1200&auto=format&fit=crop', this)" class="material-btn w-full p-5 bg-slate-50 hover:bg-slate-100 text-slate-700 font-bold text-xs uppercase text-left border border-slate-200/80 flex justify-between items-center transition-all duration-300 rounded-none">
                            <span class="tracking-wide">AKSEN KAYU &amp; NATURAL STONE</span>
                            <span class="indicator-dot w-3 h-3 bg-slate-300 rounded-full transition-all"></span>
                        </button>
                    </div>

                    <div class="p-4 bg-slate-50 border border-slate-200 text-[11px] text-slate-500 leading-relaxed mt-2">
                        <span class="font-bold text-slate-800 uppercase block mb-1">Catatan Spesifikasi:</span>
                        Kombinasi material disesuaikan dengan struktur beban bangunan dan ketahanan iklim tropis.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULIR BOOKING KONSULTASI -->
    <section id="fitur-baru" class="py-24 border-b border-slate-200 bg-slate-50/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6" data-aos="fade-right" data-aos-duration="800">
                    <span class="text-slate-700 text-xs font-bold uppercase tracking-[0.2em]">Layanan Eksklusif</span>
                    <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Jadwalkan Konsultasi Langsung dengan Principal Arsitek</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Punya konsep lahan atau sketsa kasar? Manfaatkan fitur pemesanan jadwal konsultasi tatap muka atau daring bersama tim perencana struktur dan arsitek senior kami secara personal.
                    </p>
                    <ul class="space-y-3 text-xs font-semibold text-slate-700">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Analisis awal tata letak tapak (Site Plan) gratis.
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Estimasi rancangan RAB transparan dalam 1x24 jam.
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-6 bg-white p-8 border border-slate-200 shadow-xl" data-aos="fade-left" data-aos-duration="800">
                    <h3 class="text-lg font-bold text-slate-900 mb-6 uppercase tracking-wider text-center">Formulir Booking Konsultasi</h3>
                    
                    <!-- NOTIFIKASI SUKSES BOOKING YANG PERSISTEN -->
                    @if(session('success'))
                    <div class="mb-6 p-4 bg-slate-900 text-white text-xs font-semibold flex items-center justify-between shadow-md border border-slate-800">
                        <span>{{ session('success') }}</span>
                        <button type="button" onclick="this.parentElement.style.display='none'" class="text-slate-400 hover:text-white text-sm font-bold ml-3">&times;</button>
                    </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Nama Pemohon</label>
                            <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Alamat Email</label>
                                <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Nomor WhatsApp / Telp</label>
                                <input type="text" name="phone" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Rencana Tanggal</label>
                                <input type="date" name="consultation_date" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Waktu Sesi</label>
                                <select name="time_slot" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                                    <option value="Pagi (09:00 - 11:00 WIB)">Pagi (09:00 - 11:00 WIB)</option>
                                    <option value="Siang (13:00 - 15:00 WIB)">Siang (13:00 - 15:00 WIB)</option>
                                    <option value="Sore (15:30 - 17:00 WIB)">Sore (15:30 - 17:00 WIB)</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Catatan Kebutuhan Ruang / Diskusi</label>
                            <textarea name="notes" rows="3" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900" placeholder="Contoh: Perencanaan rumah 2 lantai gaya industrial..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 text-xs uppercase tracking-widest transition-all">
                            Konfirmasi Jadwal Konsultasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTOFOLIO PROYEK DINAMIS -->
    <section id="proyek" class="py-24 border-b border-slate-200 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 mb-12 flex justify-between items-end" data-aos="fade-right" data-aos-duration="800">
            <div>
                <span class="text-slate-700 text-xs font-bold uppercase tracking-[0.2em]">Portofolio Proyek</span>
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight mt-2">Karya &amp; Rekam Jejak Konstruksi</h2>
            </div>
            <p class="text-xs text-slate-500 hidden md:block">Arahkan kursor ke gambar untuk menghentikan animasi sementara.</p>
        </div>

        <div class="relative w-full overflow-hidden py-4" data-aos="fade-up" data-aos-duration="800">
            <div class="animate-marquee flex gap-8">
                <?php if (isset($projects) && count($projects) > 0): ?>
                    <?php foreach ($projects as$project): ?>
                    <div class="w-80 sm:w-96 flex-shrink-0 group relative overflow-hidden bg-white border border-slate-200 shadow-md">
                        <img src="<?php echo !empty($project->thumbnail) ?$project->thumbnail : 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'; ?>" alt="<?php echo $project->title; ?>" class="w-full h-80 object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-90 p-6 flex flex-col justify-end">
                            <span class="text-[10px] font-bold tracking-widest text-slate-300 uppercase"><?php echo $project->category; ?></span>
                            <h3 class="text-lg font-bold text-white mt-1"><?php echo $project->title; ?></h3>
                            <p class="text-xs text-slate-300 mt-1 flex items-center gap-1">
                                Lokasi: <?php echo $project->location; ?> | Klien: <?php echo$project->client_name; ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <?php foreach ($projects as$project): ?>
                    <div class="w-80 sm:w-96 flex-shrink-0 group relative overflow-hidden bg-white border border-slate-200 shadow-md">
                        <img src="<?php echo !empty($project->thumbnail) ?$project->thumbnail : 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'; ?>" alt="<?php echo $project->title; ?>" class="w-full h-80 object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-90 p-6 flex flex-col justify-end">
                            <span class="text-[10px] font-bold tracking-widest text-slate-300 uppercase"><?php echo $project->category; ?></span>
                            <h3 class="text-lg font-bold text-white mt-1"><?php echo $project->title; ?></h3>
                            <p class="text-xs text-slate-300 mt-1 flex items-center gap-1">
                                Lokasi: <?php echo $project->location; ?> | Klien: <?php echo$project->client_name; ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <?php foreach ($projects as$project): ?>
                    <div class="w-80 sm:w-96 flex-shrink-0 group relative overflow-hidden bg-white border border-slate-200 shadow-md">
                        <img src="<?php echo !empty($project->thumbnail) ?$project->thumbnail : 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'; ?>" alt="<?php echo $project->title; ?>" class="w-full h-80 object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-90 p-6 flex flex-col justify-end">
                            <span class="text-[10px] font-bold tracking-widest text-slate-300 uppercase"><?php echo $project->category; ?></span>
                            <h3 class="text-lg font-bold text-white mt-1"><?php echo $project->title; ?></h3>
                            <p class="text-xs text-slate-300 mt-1 flex items-center gap-1">
                                Lokasi: <?php echo $project->location; ?> | Klien: <?php echo$project->client_name; ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="w-80 sm:w-96 flex-shrink-0 group relative overflow-hidden bg-white border border-slate-200 shadow-md">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Nusa Tower" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent p-6 flex flex-col justify-end">
                            <span class="text-[10px] font-bold text-slate-300 uppercase">Gedung Komersial</span>
                            <h3 class="text-lg font-bold text-white mt-1">Nusa Tower Office</h3>
                            <p class="text-xs text-slate-300 mt-1">Jakarta Selatan, DKI Jakarta</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- FORMULIR RFQ -->
    <section id="rfq" class="py-24 border-b border-slate-200 blueprint-bg relative overflow-hidden">
        <div class="max-w-3xl mx-auto px-6 space-y-12 relative z-10" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center space-y-2">
                <span class="text-xs font-bold text-slate-600 uppercase tracking-widest">Inquiry Form</span>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Permintaan Penawaran Proyek (RFQ)</h2>
                <p class="text-xs text-slate-600">Isi formulir di bawah ini untuk mengajukan estimasi kebutuhan konstruksi Anda secara langsung kepada tim kami.</p>
            </div>

            <form action="{{ route('rfq.store') }}" method="POST" class="bg-white border border-slate-200 p-8 md:p-12 space-y-6 shadow-md">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-300 p-3.5 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Alamat Email</label>
                        <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-300 p-3.5 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Nomor Telepon / WhatsApp</label>
                        <input type="text" name="phone" required class="w-full bg-slate-50 border border-slate-300 p-3.5 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Jenis Layanan</label>
                        <select name="service_type" required class="w-full bg-slate-50 border border-slate-300 p-3.5 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="Konstruksi Gedung Komersial">Konstruksi Gedung Komersial</option>
                            <option value="Infrastruktur Sipil">Infrastruktur Sipil</option>
                            <option value="Perencanaan Arsitektur">Perencanaan Arsitektur</option>
                            <option value="Renovasi &amp; Fit-Out">Renovasi &amp; Fit-Out</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Spesifikasi &amp; Detail Proyek</label>
                    <textarea id="rfqMessage" name="message" rows="4" required class="w-full bg-slate-50 border border-slate-300 p-3.5 text-xs text-slate-900 focus:outline-none focus:border-slate-900" placeholder="Tuliskan perkiraan luas area, lokasi, dan kebutuhan spesifik proyek..."></textarea>
                </div>

                <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-4 text-xs uppercase tracking-widest transition-all">
                    Kirim Permintaan Penawaran &rarr;
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-950 text-white py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3.5">
                <div class="w-9 h-9 bg-white text-slate-900 flex items-center justify-center shadow-md border border-slate-800">
                    <svg class="w-5 h-5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4" />
                    </svg>
                </div>
                <div>
                    <span class="block text-sm font-extrabold tracking-tight text-white uppercase leading-none">Karya Nusa</span>
                    <span class="text-[9px] tracking-[0.2em] text-slate-400 uppercase font-bold">Konstruksi</span>
                </div>
            </div>

            <div class="text-xs text-slate-400 text-center md:text-left flex items-center gap-2">
                <span>&copy; {{ date('Y') }} PT Karya Nusa Konstruksi. Seluruh Hak Cipta Dilindungi.</span>
                <span class="text-slate-700">|</span>
                <a href="{{ route('login') }}" class="text-[10px] text-slate-600 hover:text-slate-400 transition-colors uppercase tracking-widest">Admin</a>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ 
            once: false, 
            mirror: true, 
            offset: 80, 
            duration: 800 
        });

        let currentMultiplier = 1.0;
        function calculateBudget() {
            const pricePerSqm = parseFloat(document.getElementById('calcType').value);
            const area = parseInt(document.getElementById('calcArea').value);
            document.getElementById('areaValue').innerText = area + ' m²';

            const total = pricePerSqm * area * currentMultiplier;
            document.getElementById('totalCostDisplay').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        function setQuality(multiplier, btn) {
            document.querySelectorAll('.quality-btn').forEach(b => {
                b.classList.remove('active', 'bg-white', 'text-slate-900');
                b.classList.add('bg-slate-900', 'text-slate-300');
            });
            btn.classList.add('active', 'bg-white', 'text-slate-900');
            btn.classList.remove('bg-slate-900', 'text-slate-300');
            currentMultiplier = multiplier;
            calculateBudget();
        }

        function fillRfqFromCalc() {
            const typeText = document.getElementById('calcType').options[document.getElementById('calcType').selectedIndex].text;
            const area = document.getElementById('calcArea').value;
            const totalCost = document.getElementById('totalCostDisplay').innerText;
            
            document.getElementById('rfqMessage').value = `Hasil Simulasi Kalkulator:\n- Tipe: ${typeText}\n- Luas: ${area} m²\n- Estimasi Anggaran: ${totalCost}\n\nMohon konfirmasi kelanjutan penawaran proyek ini.`;
        }

        function changeMaterial(name, imgUrl, btn) {
            document.getElementById('facadePreview').src = imgUrl;
            document.getElementById('materialNameDisplay').innerText = name;

            document.querySelectorAll('.material-btn').forEach(b => {
                b.classList.remove('active', 'bg-slate-900', 'text-white');
                b.classList.add('bg-slate-50', 'text-slate-700');
                b.querySelector('.indicator-dot').classList.remove('bg-white');
                b.querySelector('.indicator-dot').classList.add('bg-slate-300');
            });

            btn.classList.add('active', 'bg-slate-900', 'text-white');
            btn.classList.remove('bg-slate-50', 'text-slate-700');
            btn.querySelector('.indicator-dot').classList.remove('bg-slate-300');
            btn.querySelector('.indicator-dot').classList.add('bg-white');
        }
    </script>
</body>
</html>