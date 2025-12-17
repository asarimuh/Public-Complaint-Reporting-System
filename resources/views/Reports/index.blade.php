<x-app-layout>
    <div class="max-w-[1400px] mx-auto px-6 py-8 space-y-6 pb-[100px]">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Manajemen Pengaduan</h1>
                <p class="text-sm text-gray-500">
                    Kelola, tinjau, dan ekspor laporan masyarakat
                </p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('report.create') }}"
                   class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700">
                    ➕ Tambah Pengaduan
                </a>

                <a href="{{ route('report.export') }}"
                   class="inline-flex items-center gap-2 bg-emerald-600 text-white px-4 py-2 rounded-xl hover:bg-emerald-700">
                    📥 Ekspor Excel
                </a>
            </div>
        </div>
        <!-- FILTER BAR -->
        <div class="bg-white border border-gray-200 rounded-2xl p-4">
            <form method="GET" action="{{ route('report.index') }}"
                  class="grid grid-cols-1 md:grid-cols-5 gap-4">

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari deskripsi laporan..."
                       class="md:col-span-2 border-gray-300 rounded-lg focus:ring-blue-500">

                <select name="type" class="border-gray-300 rounded-lg">
                    <option value="">Semua Tipe</option>
                    @foreach ($types as $type)
                        <option value="{{ $type }}" @selected(request('type') == $type)>
                            {{ ucfirst($type) }}
                        </option>
                    @endforeach
                </select>

                <select name="province" class="border-gray-300 rounded-lg">
                    <option value="">Semua Provinsi</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province }}" @selected(request('province') == $province)>
                            {{ $province }}
                        </option>
                    @endforeach
                </select>

                <button class="bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Filter
                </button>
            </form>
        </div>
        <!-- Reports Table -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Daftar Pengaduan</h3>
                            <p class="text-sm text-gray-600 mt-1">Total {{ $reports->total() }} pengaduan ditemukan</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-600">Sortir:</span>
                            <select onchange="this.form.submit()" name="sort" class="border border-gray-300 rounded-lg p-2 text-sm">
                                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
                                <option value="most_voted" {{ request('sort') == 'most_voted' ? 'selected' : '' }}>Dukungan Tertinggi</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    @if($reports->isEmpty())
                        <div class="text-center py-12">
                            <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center">
                                <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-700 mb-2">Tidak Ada Pengaduan</h4>
                            <p class="text-gray-600 max-w-md mx-auto mb-4">
                                Tidak ada pengaduan yang sesuai dengan filter yang Anda pilih.
                            </p>
                            <a href="{{ route('report.index') }}" 
                               class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                                Reset Filter
                            </a>
                        </div>
                    @else
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Deskripsi</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Lokasi</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($reports as $report)
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm font-medium text-gray-900">#{{ $report->id }}</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 max-w-xs truncate">{{ $report->description }}</div>
                                            <div class="flex items-center gap-2 mt-1">
                                                <span class="text-xs text-gray-500">👍 {{ $report->voting }}</span>
                                                <span class="text-xs text-gray-500">•</span>
                                                <span class="text-xs text-gray-500">👁️ {{ $report->viewers }}</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-700">{{ $report->type }}</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-700">{{ $report->province }}</div>
                                            <div class="text-xs text-gray-500">{{ $report->regency }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @php
                                                $statusConfig = [
                                                    'pending' => ['bg-yellow-100 text-yellow-800', 'Pending'],
                                                    'on_process' => ['bg-blue-100 text-blue-800', 'Diproses'],
                                                    'done' => ['bg-green-100 text-green-800', 'Selesai'],
                                                    'rejected' => ['bg-red-100 text-red-800', 'Ditolak']
                                                ];
                                                $config = $statusConfig[$report->statement] ?? $statusConfig['pending'];
                                            @endphp
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold {{ $config[0] }}">
                                                @if($report->statement == 'pending')
                                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
                                                @elseif($report->statement == 'on_process')
                                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                                @elseif($report->statement == 'done')
                                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                @elseif($report->statement == 'rejected')
                                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                                                @endif
                                                {{ $config[1] }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $report->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('report.show', $report->id) }}" 
                                                   class="inline-flex items-center px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition-colors duration-200 text-sm">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                    Lihat
                                                </a>
                                                <a href="{{ route('report.edit', $report->id) }}" 
                                                   class="inline-flex items-center px-3 py-1.5 bg-yellow-50 text-yellow-600 rounded-lg hover:bg-yellow-100 transition-colors duration-200 text-sm">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                    Edit
                                                </a>
                                                <form action="{{ route('report.destroy', $report->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors duration-200 text-sm">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <!-- Pagination -->
                @if($reports->hasPages())
                    <div class="px-6 py-4 border-t border-gray-200">
                        {{ $reports->links('pagination::tailwind') }}
                    </div>
                @endif
            </div>
        </div>

    </div>
</x-app-layout>
