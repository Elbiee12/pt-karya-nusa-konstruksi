<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Konsultasi - Admin PT Karya Nusa Konstruksi</title>
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
                    <span class="text-sm font-extrabold tracking-tight uppercase text-slate-900">Jadwal Konsultasi</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 text-xs font-bold uppercase tracking-wider text-slate-600">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-slate-900 transition-colors">Overview</a>
                <a href="{{ route('admin.projects') }}" class="hover:text-slate-900 transition-colors">Portofolio Proyek</a>
                <a href="{{ route('admin.rfq') }}" class="hover:text-slate-900 transition-colors">Pesan RFQ</a>
                <a href="{{ route('admin.bookings') }}" class="text-slate-900 border-b-2 border-slate-900 pb-1">Booking Konsultasi</a>
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

        <div class="flex justify-between items-end border-b border-slate-200 pb-6">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Kelola Jadwal Konsultasi Klien</h1>
            <span class="px-3 py-1 bg-slate-900 text-white text-xs font-bold">{{ count($bookings) }} Total Booking</span>
        </div>

        <div class="bg-slate-50 border border-slate-200 p-8 shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-600">
                    <thead class="bg-slate-100 uppercase font-bold text-slate-700 border-b border-slate-200">
                        <tr>
                            <th class="p-3.5">Nama / Kontak Klien</th>
                            <th class="p-3.5">Tanggal &amp; Waktu</th>
                            <th class="p-3.5">Catatan Tambahan</th>
                            <th class="p-3.5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @forelse($bookings as $booking)
                        <tr class="hover:bg-white">
                            <td class="p-3.5">
                                <span class="font-bold text-slate-900 block">{{ $booking->name }}</span>
                                <span class="text-slate-500">{{ $booking->email }}</span><br>
                                <span class="text-slate-500 font-semibold">{{ $booking->phone }}</span>
                            </td>
                            <td class="p-3.5">
                                <span class="font-bold text-slate-900 block">{{ $booking->consultation_date }}</span>
                                <span class="text-slate-500 uppercase text-[11px]">{{ $booking->time_slot }}</span>
                            </td>
                            <td class="p-3.5 max-w-sm leading-relaxed text-slate-700">{{ $booking->notes ?: '-' }}</td>
                            <td class="p-3.5 text-center">
                                <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Hapus jadwal konsultasi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 hover:text-rose-800 font-bold uppercase tracking-wider text-[10px]">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-8 text-center text-slate-400 italic">Belum ada jadwal booking konsultasi masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
</html>