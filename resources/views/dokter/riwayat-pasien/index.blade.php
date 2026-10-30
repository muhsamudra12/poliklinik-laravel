<x-layouts.app title="Riwayat Pasien">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Riwayat Pasien</h2>
    </div>

    <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">
        <div class="card-body p-0">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead class="bg-slate-100 text-slate-500 text-xs uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Tanggal Periksa</th>
                            <th class="px-6 py-4">Nama Pasien</th>
                            <th class="px-6 py-4">Catatan</th>
                            <th class="px-6 py-4">Biaya</th>
                            <th class="px-6 py-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($riwayatPasien as $periksa)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-6 py-4 text-slate-500">
                                {{ \Carbon\Carbon::parse($periksa->tgl_periksa)->format('d M Y, H:i') }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-slate-800">
                                {{ $periksa->daftarPoli->pasien->nama ?? '-' }}
                            </td>
                            <td class="px-6 py-4 text-slate-500 max-w-xs truncate">
                                {{ $periksa->catatan ?? '-' }}
                            </td>
                            <td class="px-6 py-4 text-slate-500">
                                Rp {{ number_format($periksa->biaya_periksa, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('riwayat-pasien.show', $periksa->id) }}"
                                    class="inline-flex items-center gap-1 px-3 py-2 bg-[#2d4499] hover:bg-[#1e2d6b] text-white rounded-lg text-xs font-semibold transition">
                                    <i class="fas fa-eye text-xs"></i> Detail
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-14 text-slate-400">
                                <i class="fas fa-inbox text-3xl mb-3 block"></i>
                                Belum ada riwayat pasien
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layouts.app>