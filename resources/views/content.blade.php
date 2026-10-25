<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Perjalanan - Peserta</title>
    <!-- Memuat Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-950 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-xl bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl p-8 text-white">
        
        <!-- Header Profil & Tombol Keluar -->
        <div class="flex justify-between items-center pb-6 border-b border-white/10 mb-6">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-white">
                    Halo, {{ session('participant_name') }}! 👋
                </h1>
                <p class="text-emerald-400 text-xs font-medium mt-1 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Akses terverifikasi & aktif
                </p>
            </div>
            <a href="{{ route('logout') }}" 
               class="px-4 py-2 bg-red-500/20 hover:bg-red-500/30 border border-red-500/40 text-red-200 text-sm font-medium rounded-xl transition">
                Keluar
            </a>
        </div>

        <!-- Judul Informasi -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-white flex items-center gap-2">
                📍 Detail Info Perjalanan
            </h2>
        </div>

        <!-- Kartu Informasi / Detail -->
        <div class="space-y-4">
            
            <!-- Jadwal Keberangkatan -->
            <div class="bg-slate-900/50 border border-slate-700/60 rounded-xl p-4 transition hover:border-blue-500/50">
                <span class="text-xs font-semibold uppercase tracking-wider text-blue-400">Jadwal Keberangkatan</span>
                <p class="text-white font-medium text-lg mt-1">Senin, 02 November 2026 — Pukul 08.00 WIB</p>
            </div>

            <!-- Titik Kumpul -->
            <div class="bg-slate-900/50 border border-slate-700/60 rounded-xl p-4 transition hover:border-blue-500/50">
                <span class="text-xs font-semibold uppercase tracking-wider text-indigo-400">Titik Kumpul</span>
                <p class="text-white font-medium text-base mt-1">Lobby Utama Gedung Kantor Pusat</p>
            </div>

            <!-- Catatan Penting -->
            <div class="bg-amber-500/10 border border-amber-500/30 rounded-xl p-4 text-amber-200 text-sm">
                <span class="text-xs font-semibold uppercase tracking-wider text-amber-400 block mb-1">Catatan Penting</span>
                Peserta diharapkan hadir 30 menit sebelum jadwal keberangkatan dan membawa identitas masing-masing.
            </div>

        </div>

        <!-- Footer Kecil -->
        <div class="mt-8 pt-4 border-t border-white/10 text-center text-xs text-slate-400">
            &copy; {{ date('Y') }} Sistem Informasi Perjalanan. All rights reserved.
        </div>

    </div>

</body>
</html>