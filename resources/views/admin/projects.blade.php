<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Proyek - Admin PT Karya Nusa Konstruksi</title>
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
                    <span class="text-sm font-extrabold tracking-tight uppercase text-slate-900">Manajemen Proyek</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 text-xs font-bold uppercase tracking-wider text-slate-600">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-slate-900 transition-colors">Overview</a>
                <a href="{{ route('admin.projects') }}" class="text-slate-900 border-b-2 border-slate-900 pb-1">Portofolio Proyek</a>
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
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Daftar Proyek &amp; Penambahan Portofolio</h1>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-start">
            
            <!-- FORM TAMBAH PROYEK -->
            <div class="lg:col-span-4 bg-slate-50 border border-slate-200 p-8 shadow-sm">
                <h3 class="text-base font-bold text-slate-900 uppercase tracking-tight mb-6">Tambah Proyek Baru</h3>
                <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Judul Proyek</label>
                        <input type="text" name="title" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Klien</label>
                        <input type="text" name="client_name" placeholder="Contoh: PT Angkasa Pura" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Kategori</label>
                        <input type="text" name="category" placeholder="Contoh: Gedung Komersial" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Lokasi</label>
                        <input type="text" name="location" placeholder="Contoh: Jakarta Selatan" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Tanggal Selesai</label>
                        <input type="date" name="completion_date" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Rentang Anggaran (Opsional)</label>
                        <input type="text" name="budget_range" placeholder="Contoh: Rp 5 M - 10 M" class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Status Proyek</label>
                        <select name="status" class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="completed">Selesai (Completed)</option>
                            <option value="ongoing">Sedang Berjalan (Ongoing)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Deskripsi Proyek</label>
                        <textarea name="description" rows="3" required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900" placeholder="Ringkasan pengerjaan proyek..."></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">URL Thumbnail Gambar</label>
                        <input type="url" name="thumbnail" placeholder="https://images.unsplash.com/..." required class="w-full bg-white border border-slate-300 p-3 text-xs text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3.5 text-xs uppercase tracking-widest transition-all">
                        Simpan Proyek
                    </button>
                </form>
            </div>

            <!-- TABEL DAFTAR PROYEK -->
            <div class="lg:col-span-8 bg-slate-50 border border-slate-200 p-8 shadow-sm">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-base font-bold text-slate-900 uppercase tracking-tight">Portofolio Terdaftar</h3>
                    <span class="text-xs font-bold text-slate-500 uppercase">{{ count($projects) }} Item</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs text-slate-600">
                        <thead class="bg-slate-100 uppercase font-bold text-slate-700 border-b border-slate-200">
                            <tr>
                                <th class="p-3">Thumbnail</th>
                                <th class="p-3">Judul &amp; Klien</th>
                                <th class="p-3">Kategori &amp; Lokasi</th>
                                <th class="p-3">Status</th>
                                <th class="p-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            @forelse($projects as $project)
                            <tr class="hover:bg-white">
                                <td class="p-3">
                                    <img src="{{ $project->thumbnail }}" alt="" class="w-12 h-12 object-cover border border-slate-300">
                                </td>
                                <td class="p-3">
                                    <span class="font-bold text-slate-900 block">{{ $project->title }}</span>
                                    <span class="text-slate-500 text-[11px]">Klien: {{ $project->client_name }}</span>
                                </td>
                                <td class="p-3">
                                    <span class="font-semibold text-slate-800 block">{{ $project->category }}</span>
                                    <span class="text-slate-500 text-[11px]">{{ $project->location }}</span>
                                </td>
                                <td class="p-3">
                                    <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider {{ $project->status == 'completed' ? 'bg-slate-900 text-white' : 'bg-slate-200 text-slate-800' }}">
                                        {{ $project->status == 'completed' ? 'Selesai' : 'Berjalan' }}
                                    </span>
                                </td>
                                <td class="p-3 text-center">
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Hapus proyek ini dari portofolio?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-600 hover:text-rose-800 font-bold uppercase tracking-wider text-[10px]">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="p-6 text-center text-slate-400 italic">Belum ada data proyek.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>
</body>
</html>