<x-layouts.app title="Dashboard Pasien">

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Dashboard Pasien</h2>
        <p class="text-slate-500 text-sm mt-1">Selamat datang, {{ Auth::user()->nama }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Card No. RM --}}
        <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">
            <div class="card-body p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                        <i class="fas fa-id-card text-amber-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">No. Rekam Medis</p>
                        <p class="text-xl font-bold text-slate-800">
                            {{ Auth::user()->no_rm ?? '-' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card Daftar Poli --}}
        <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">
            <div class="card-body p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center">
                        <i class="fas fa-hospital text-indigo-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">Pendaftaran Poli</p>
                        <p class="text-sm font-semibold text-slate-800 mt-1">
                            Daftarkan diri kamu ke poli yang tersedia
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('pasien.daftar') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#2d4499] hover:bg-[#1e2d6b] text-white rounded-lg text-sm font-semibold transition">
                        <i class="fas fa-plus text-xs"></i>
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

        {{-- Card Info Pasien --}}
        <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200 md:col-span-2">
            <div class="card-body p-6">
                <h3 class="font-bold text-slate-700 mb-4">Informasi Pribadi</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <p class="text-slate-400">Nama Lengkap</p>
                        <p class="font-semibold text-slate-800">{{ Auth::user()->nama }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400">Email</p>
                        <p class="font-semibold text-slate-800">{{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400">No. HP</p>
                        <p class="font-semibold text-slate-800">{{ Auth::user()->no_hp ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400">Alamat</p>
                        <p class="font-semibold text-slate-800">{{ Auth::user()->alamat ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layouts.app>