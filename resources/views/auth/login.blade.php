<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Admin - PT Karya Nusa Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4 antialiased text-slate-800">

    <div class="max-w-md w-full bg-white border border-slate-200 p-8 sm:p-10 shadow-xl">
        
        <!-- LOGO RESMI EKSKLUSIF (SVG GEDUNG) -->
        <div class="flex flex-col items-center mb-8">
            <a href="{{ url('/') }}" class="flex items-center gap-3 mb-3 group">
                <div class="w-12 h-12 bg-slate-900 text-white flex items-center justify-center shadow-md border border-slate-800 transition-transform group-hover:scale-105">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4" />
                    </svg>
                </div>
            </a>
            <h1 class="text-xl font-extrabold text-slate-900 uppercase tracking-tight text-center leading-none">Portal Admin Internal</h1>
            <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mt-1.5">PT Karya Nusa Konstruksi</p>
        </div>

        <!-- PESAN ERROR JIKA GAGAL LOGIN -->
        @if(session('error') || $errors->any())
        <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-600 text-xs font-medium text-center shadow-sm">
            {{ session('error') ?? 'Email atau kata sandi yang Anda masukkan salah.' }}
        </div>
        @endif

        <!-- FORMULIR LOGIN -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Admin</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email', 'admin@karyanusa.co.id') }}" 
                    required 
                    autofocus 
                    class="w-full bg-slate-50 border border-slate-300 text-slate-900 px-4 py-3 text-sm focus:border-slate-900 focus:bg-white focus:outline-none transition-all shadow-sm"
                    placeholder="admin@karyanusa.co.id"
                >
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Kata Sandi</label>
                <input 
                    type="password" 
                    name="password" 
                    required 
                    class="w-full bg-slate-50 border border-slate-300 text-slate-900 px-4 py-3 text-sm focus:border-slate-900 focus:bg-white focus:outline-none transition-all shadow-sm"
                    placeholder="••••••••"
                >
            </div>

            <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3.5 text-xs uppercase tracking-widest transition-all shadow-md mt-2">
                Masuk ke Dashboard
            </button>
        </form>

        <div class="mt-8 text-center border-t border-slate-200 pt-6">
            <a href="{{ url('/') }}" class="text-xs text-slate-500 hover:text-slate-900 transition-colors font-medium inline-flex items-center gap-1">
                &larr; Kembali ke Beranda Website
            </a>
        </div>
    </div>

</body>
</html>