<x-layouts.app title="Dashboard Dokter">

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Dashboard Dokter</h2>
        <p class="text-slate-500 text-sm mt-1">Selamat datang, {{ Auth::user()->nama }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Card Jadwal Periksa --}}
        <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">
            <div class="card-body p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-calendar-days text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">Jadwal Periksa</p>
                        <p class="text-2xl font-bold text-slate-800">
                            {{ Auth::user()->jadwalPeriksas->count() }}
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('jadwal-periksa.index') }}"
                        class="text-sm text-purple-600 hover:underline font-semibold">
                        Lihat Jadwal →
                    </a>
                </div>
            </div>
        </div>

        {{-- Card Poli --}}
        <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">
            <div class="card-body p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center">
                        <i class="fas fa-hospital text-indigo-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">Poli</p>
                        <p class="text-2xl font-bold text-slate-800">
                            {{ Auth::user()->poli->nama_poli ?? 'Belum Dipilih' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layouts.app>