<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PT Karya Nusa Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-white text-slate-800 antialiased min-h-screen">

    <!-- NAVBAR ADMIN -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-slate-900 text-white flex items-center justify-center font-bold shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4" />
                    </svg>
                </div>
                <div>
                    <span class="block text-xs font-bold text-slate-500 uppercase tracking-widest">Portal Internal</span>
                    <span class="text-sm font-extrabold tracking-tight uppercase text-slate-900">Dashboard Utama</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 text-xs font-bold uppercase tracking-wider text-slate-600">
                <a href="{{ route('admin.dashboard') }}" class="text-slate-900 border-b-2 border-slate-900 pb-1">Overview</a>
                <a href="{{ route('admin.projects') }}" class="hover:text-slate-900 transition-colors">Portofolio Proyek</a>
                <a href="{{ route('admin.rfq') }}" class="hover:text-slate-900 transition-colors">Pesan RFQ</a>
                <a href="{{ route('admin.bookings') }}" class="hover:text-slate-900 transition-colors">Booking Konsultasi</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" target="_blank" class="text-xs font-bold uppercase tracking-wider text-slate-600 hover:text-slate-900 transition-colors hidden sm:inline-block">Lihat Website &rarr;</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-slate-900 hover:bg-slate-800 text-white px-4 py-2 text-xs font-bold uppercase tracking-wider transition-all">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-12 space-y-10">

        @if(session('success'))
        <div class="p-4 bg-slate-100 border border-slate-300 text-slate-800 text-xs font-medium shadow-sm">
            {{ session('success') }}
        </div>
        @endif

        <div class="border-b border-slate-200 pb-6">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Ringkasan Sistem &amp; Statistik</h1>
        </div>

        <!-- STATS CARDS -->
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-slate-50 border border-slate-200 p-6 shadow-sm">
                <div class="text-3xl font-extrabold text-slate-900 mb-1">{{ count($rfqs) }}</div>
                <div class="text-xs font-bold uppercase tracking-wider text-slate-600">Total Permintaan Penawaran (RFQ)</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 p-6 shadow-sm">
                <div class="text-3xl font-extrabold text-slate-900 mb-1">{{ count($bookings) }}</div>
                <div class="text-xs font-bold uppercase tracking-wider text-slate-600">Total Booking Konsultasi</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 p-6 shadow-sm">
                <div class="text-3xl font-extrabold text-slate-900 mb-1">{{ count($projects) }}</div>
                <div class="text-xs font-bold uppercase tracking-wider text-slate-600">Proyek Portofolio Terdaftar</div>
            </div>
        </div>

        <!-- SECTION GRAFIK STATISTIK ANALITIK (CLEAN SWISS STYLE) -->
        <div class="grid lg:grid-cols-12 gap-8">
            <div class="lg:col-span-7 bg-slate-50 border border-slate-200 p-8 shadow-sm space-y-6">
                <div>
                    <h2 class="text-lg font-bold text-slate-900 tracking-tight">Grafik Aktivitas Layanan &amp; Konsultasi</h2>
                    <p class="text-xs text-slate-500 mt-1">Distribusi perbandingan data masuk ke sistem secara real-time.</p>
                </div>

                <!-- Progress / Bar Chart -->
                <div class="space-y-4 text-xs">
                    <div>
                        <div class="flex justify-between font-bold text-slate-700 mb-1">
                            <span>Permintaan Penawaran (RFQ)</span>
                            <span>{{ count($rfqs) }} Data</span>
                        </div>
                        <div class="w-full bg-slate-200 h-3 overflow-hidden">
                            <div class="bg-slate-900 h-full transition-all duration-500" style="width: {{ count($rfqs) > 0 ? min(100, count($rfqs) * 10) : 5 }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between font-bold text-slate-700 mb-1">
                            <span>Booking Konsultasi Klien</span>
                            <span>{{ count($bookings) }} Data</span>
                        </div>
                        <div class="w-full bg-slate-200 h-3 overflow-hidden">
                            <div class="bg-slate-700 h-full transition-all duration-500" style="width: {{ count($bookings) > 0 ? min(100, count($bookings) * 10) : 5 }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between font-bold text-slate-700 mb-1">
                            <span>Portofolio Proyek Aktif</span>
                            <span>{{ count($projects) }} Data</span>
                        </div>
                        <div class="w-full bg-slate-200 h-3 overflow-hidden">
                            <div class="bg-slate-500 h-full transition-all duration-500" style="width: {{ count($projects) > 0 ? min(100, count($projects) * 10) : 5 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 bg-slate-50 border border-slate-200 p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-bold text-slate-900 tracking-tight mb-2">Akses Cepat Menu</h2>
                    <p class="text-xs text-slate-500 mb-6">Pintas cepat untuk mengelola data operasional harian.</p>
                </div>
                <div class="space-y-3">
                    <a href="{{ route('admin.projects') }}" class="block w-full bg-white border border-slate-300 hover:border-slate-900 p-3 text-xs font-bold uppercase tracking-wider text-slate-800 transition-all text-center">
                        Kelola Portofolio Proyek &rarr;
                    </a>
                    <a href="{{ route('admin.rfq') }}" class="block w-full bg-white border border-slate-300 hover:border-slate-900 p-3 text-xs font-bold uppercase tracking-wider text-slate-800 transition-all text-center">
                        Lihat Pesan Masuk RFQ &rarr;
                    </a>
                    <a href="{{ route('admin.bookings') }}" class="block w-full bg-slate-900 text-white p-3 text-xs font-bold uppercase tracking-wider transition-all text-center">
                        Kelola Jadwal Booking &rarr;
                    </a>
                </div>
            </div>
        </div>

    </main>
</body>
</html>