<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Peserta - Info Perjalanan</title>
    <!-- Memuat Tailwind CSS via CDN untuk styling yang modern dan cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-950 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl p-8 text-white">
        
        <!-- Header / Judul -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-white mb-2">Selamat Datang</h1>
            <p class="text-slate-300 text-sm">Silakan registrasi terlebih dahulu untuk melihat info perjalanan.</p>
        </div>

        <!-- Notifikasi Error Validasi -->
        @if ($errors->any())
            <div class="mb-6 bg-red-500/20 border border-red-500/50 text-red-200 px-4 py-3 rounded-xl text-sm">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Registrasi -->
        <form action="{{ route('participant.store') }}" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label for="name" class="block text-sm font-medium text-slate-200 mb-1">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none text-white placeholder-slate-500 transition"
                    placeholder="Masukkan nama lengkap...">
            </div>

            <div>
                <label for="department" class="block text-sm font-medium text-slate-200 mb-1">Departemen / Bagian</label>
                <input type="text" id="department" name="department" value="{{ old('department') }}" required
                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none text-white placeholder-slate-500 transition"
                    placeholder="Contoh: Operasional / Logistik">
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-slate-200 mb-1">Nomor HP / WhatsApp</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none text-white placeholder-slate-500 transition"
                    placeholder="Contoh: 081234567890">
            </div>

            <button type="submit" 
                class="w-full py-3.5 px-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-200 transform active:scale-[0.98]">
                Masuk & Lihat Konten
            </button>
        </form>

    </div>

</body>
</html>