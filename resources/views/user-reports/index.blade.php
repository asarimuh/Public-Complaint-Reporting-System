<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50 pb-[100px] pt-4">
        <div class="max-w-7xl mx-auto px-6 space-y-10">
            <!-- Info Card -->
            <div class="bg-white/80 backdrop-blur border border-slate-200 rounded-2xl p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-slate-800 mb-3">
                    Informasi Pembuatan Pengaduan
                </h2>
                <ul class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                    <li>✔️ Pengaduan hanya dapat dibuat oleh pengguna terdaftar</li>
                    <li>✔️ Data harus benar dan dapat dipertanggungjawabkan</li>
                    <li>✔️ Seluruh kolom wajib diisi</li>
                    <li>✔️ Tanggapan maksimal dalam <strong>2x24 jam</strong></li>
                    <li>✔️ Status dapat dipantau melalui dashboard</li>
                    <li>
                        ✔️
                        <a href="{{ route('user.report.create') }}" class="text-blue-600 font-medium hover:underline">
                            Klik di sini untuk membuat laporan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Filter & Search & Create button - Redesigned -->
            <div class="bg-white rounded-2xl border border-slate-200 p-4 md:p-6 shadow-sm">
                <!-- Header Section -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                    <div>
                        <h1 class="text-xl font-bold text-slate-800">
                            Daftar Pengaduan
                        </h1>
                        <p class="text-sm text-slate-500 mt-1">
                            Kelola dan lacak pengaduan Anda
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <!-- Search input moved to header on mobile -->
                        <div class="sm:hidden w-full">
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari pengaduan..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border-slate-300 bg-slate-50 
                                  focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <a href="{{ route('user.report.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-3 bg-blue-600 text-white 
                       rounded-xl font-semibold hover:bg-blue-700 transition-all duration-200 
                       shadow-sm hover:shadow-md whitespace-nowrap flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="hidden sm:inline">Buat Laporan</span>
                            <span class="sm:hidden">Buat</span>
                        </a>
                    </div>
                </div>

                <!-- Filter Form Section -->
                <form method="GET" action="{{ route('user.reports') }}" class="space-y-4 md:space-y-0">

                    <!-- Desktop Search (hidden on mobile) -->
                    <div class="hidden sm:grid grid-cols-1 md:grid-cols-5 gap-4">
                        <div class="md:col-span-2">
                            <label class="text-sm font-medium text-slate-600 mb-1 block">Pencarian</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari berdasarkan judul atau deskripsi..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border-slate-300 bg-slate-50 
                                  focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-600 mb-1 block">Tipe</label>
                            <select name="type" class="w-full py-2.5 rounded-xl border-slate-300 bg-slate-50 
                           focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Semua Tipe</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-600 mb-1 block">Provinsi</label>
                            <select name="province" class="w-full py-2.5 rounded-xl border-slate-300 bg-slate-50 
                           focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Semua Provinsi</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province }}" {{ request('province') == $province ? 'selected' : '' }}>
                                        {{ $province }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-end">
                            <button type="submit" class="w-full py-2.5 rounded-xl bg-blue-600 text-white font-semibold 
                           hover:bg-blue-700 transition-all duration-200 shadow-sm hover:shadow-md 
                           flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <span>Cari</span>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile/Tablet Layout -->
                    <div class="sm:hidden space-y-4">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-1 block">Tipe</label>
                                <select name="type" class="w-full py-2.5 rounded-xl border-slate-300 bg-slate-50 
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Tipe</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-1 block">Provinsi</label>
                                <select name="province" class="w-full py-2.5 rounded-xl border-slate-300 bg-slate-50 
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Provinsi</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province }}" {{ request('province') == $province ? 'selected' : '' }}>
                                            {{ $province }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="w-full py-2.5 rounded-xl bg-blue-600 text-white font-semibold 
                               hover:bg-blue-700 transition-all duration-200 shadow-sm hover:shadow-md 
                               flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <span>Terapkan Filter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Active Filters Indicator -->
                @if(request('search') || request('type') || request('province'))
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm text-slate-500">Filter aktif:</span>
                            @if(request('search'))
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-blue-50 text-blue-700 
                                    rounded-lg text-sm border border-blue-100">
                                    Pencarian: "{{ request('search') }}"
                                    <a href="{{ route('user.reports', array_merge(request()->except(['search', 'page']))) }}"
                                        class="text-blue-500 hover:text-blue-700 ml-1">
                                        &times;
                                    </a>
                                </span>
                            @endif
                            @if(request('type'))
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-blue-50 text-blue-700 
                                    rounded-lg text-sm border border-blue-100">
                                    Tipe: {{ request('type') }}
                                    <a href="{{ route('user.reports', array_merge(request()->except(['type', 'page']))) }}"
                                        class="text-blue-500 hover:text-blue-700 ml-1">
                                        &times;
                                    </a>
                                </span>
                            @endif
                            @if(request('province'))
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-blue-50 text-blue-700 
                                    rounded-lg text-sm border border-blue-100">
                                    Provinsi: {{ request('province') }}
                                    <a href="{{ route('user.reports', array_merge(request()->except(['province', 'page']))) }}"
                                        class="text-blue-500 hover:text-blue-700 ml-1">
                                        &times;
                                    </a>
                                </span>
                            @endif
                            @if(request('search') || request('type') || request('province'))
                                <a href="{{ route('user.reports') }}" class="text-sm text-slate-600 hover:text-slate-800 ml-2">
                                    Hapus semua filter
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <!-- Reports Grid -->
            @if($reports->isEmpty())
                <div class="text-center py-20">
                    <div class="max-w-md mx-auto">
                        <div
                            class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                            <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-700 mb-2">Belum Ada Laporan</h3>
                        <p class="text-slate-600 mb-6">Jadilah yang pertama membuat laporan di wilayah Anda</p>
                        <a href="{{ route('user.report.create') }}"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold hover:shadow-lg transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Buat Laporan Pertama
                        </a>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($reports as $report)
                        <div
                            class="group relative bg-white rounded-2xl shadow-md border border-slate-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 overflow-hidden">
                            <!-- Image with Overlay -->
                            <div class="relative h-52 overflow-hidden">
                                @if($report->image)
                                    <img src="{{ asset('storage/' . $report->image) }}" alt="Report Image"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- Status Badge -->
                                <div class="absolute top-3 left-3">
                                    @php
                                        $statusConfig = [
                                            'pending' => ['bg-yellow-100 text-yellow-800 border-yellow-200', 'Pending'],
                                            'on_process' => ['bg-blue-100 text-blue-800 border-blue-200', 'Diproses'],
                                            'done' => ['bg-green-100 text-green-800 border-green-200', 'Selesai'],
                                            'rejected' => ['bg-red-100 text-red-800 border-red-200', 'Ditolak']
                                        ];
                                        $config = $statusConfig[$report->statement] ?? $statusConfig['pending'];
                                    @endphp
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold border {{ $config[0] }}">
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
                                </div>

                                <!-- Date Badge -->
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-block px-2.5 py-1 bg-black/40 backdrop-blur-sm text-white text-xs rounded-lg">
                                        {{ $report->created_at->format('d M') }}
                                    </span>
                                </div>

                                <!-- Gradient Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-5">
                                <!-- Description -->
                                <h3 class="font-semibold text-slate-800 mb-3 line-clamp-2 text-lg leading-snug">
                                    {{ Str::limit($report->description, 100) }}
                                </h3>

                                <!-- Metadata -->
                                <div class="space-y-3 mb-4">
                                    <!-- Type -->
                                    <div class="flex items-center gap-2 text-sm text-slate-600">
                                        <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center">
                                            <svg class="w-3 h-3 text-blue-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                        </div>
                                        <span>{{ Str::limit($report->type, 25) }}</span>
                                    </div>

                                    <!-- Location -->
                                    <div class="flex items-center gap-2 text-sm text-slate-600">
                                        <div class="w-5 h-5 rounded-md bg-indigo-50 flex items-center justify-center">
                                            <svg class="w-3 h-3 text-indigo-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <span>{{ Str::limit($report->province, 25) }}</span>
                                    </div>

                                    <!-- Additional Stats -->
                                    <div class="flex items-center justify-between pt-3 border-t border-slate-100">
                                        <div class="flex items-center gap-1 text-sm text-slate-500">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                            <span class="font-medium text-slate-700">{{ $report->voting }}</span> dukungan
                                        </div>
                                        <div class="flex items-center gap-1 text-sm text-slate-500">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            <span class="font-medium text-slate-700">{{ $report->viewers }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Button -->
                                <a href="{{ route('user.report.show', $report->id) }}"
                                    class="block w-full text-center px-4 py-3 bg-gradient-to-r from-slate-50 to-slate-100 hover:from-slate-100 hover:to-slate-200 text-slate-700 rounded-xl font-semibold transition-all duration-300 hover:shadow-md group-hover:bg-gradient-to-r group-hover:from-blue-50 group-hover:to-blue-100 group-hover:text-blue-700">
                                    <span class="flex items-center justify-center gap-2">
                                        Lihat Detail
                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($reports->hasPages())
                    <div class="mt-12">
                        <nav class="flex items-center justify-between border-t border-slate-200 px-4 sm:px-0">
                            <div class="-mt-px flex w-0 flex-1">
                                @if($reports->onFirstPage())
                                    <span
                                        class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-slate-400 cursor-not-allowed">
                                        <svg class="mr-3 h-5 w-5 text-slate-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Sebelumnya
                                    </span>
                                @else
                                    <a href="{{ $reports->previousPageUrl() }}"
                                        class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-slate-600 hover:border-slate-300 hover:text-slate-700 transition-colors duration-200">
                                        <svg class="mr-3 h-5 w-5 text-slate-600" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Sebelumnya
                                    </a>
                                @endif
                            </div>

                            <div class="hidden md:-mt-px md:flex">
                                @foreach($reports->links()->elements[0] as $page => $url)
                                    @if($page == $reports->currentPage())
                                        <a href="{{ $url }}"
                                            class="inline-flex items-center border-t-2 border-blue-500 px-4 pt-4 text-sm font-medium text-blue-600">
                                            {{ $page }}
                                        </a>
                                    @else
                                        <a href="{{ $url }}"
                                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-slate-600 hover:border-slate-300 hover:text-slate-700 transition-colors duration-200">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            <div class="-mt-px flex w-0 flex-1 justify-end">
                                @if($reports->hasMorePages())
                                    <a href="{{ $reports->nextPageUrl() }}"
                                        class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-slate-600 hover:border-slate-300 hover:text-slate-700 transition-colors duration-200">
                                        Selanjutnya
                                        <svg class="ml-3 h-5 w-5 text-slate-600" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                @else
                                    <span
                                        class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-slate-400 cursor-not-allowed">
                                        Selanjutnya
                                        <svg class="ml-3 h-5 w-5 text-slate-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        </nav>
                    </div>
                @endif
            @endif

            <style>
                .line-clamp-2 {
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 2;
                }

                .line-clamp-1 {
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 1;
                }

                /* Smooth image scaling */
                img {
                    will-change: transform;
                    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                }
            </style>

            <script>
                // Add intersection observer for lazy loading images
                document.addEventListener('DOMContentLoaded', function () {
                    const imageObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const img = entry.target;
                                img.src = img.dataset.src;
                                img.classList.remove('opacity-0');
                                observer.unobserve(img);
                            }
                        });
                    }, {
                        rootMargin: '50px 0px',
                        threshold: 0.1
                    });

                    // Observe all report images
                    document.querySelectorAll('.report-image').forEach(img => {
                        imageObserver.observe(img);
                    });

                    // Add hover effect to entire card
                    const cards = document.querySelectorAll('.group');
                    cards.forEach(card => {
                        card.addEventListener('mouseenter', function () {
                            this.style.transform = 'translateY(-4px)';
                        });

                        card.addEventListener('mouseleave', function () {
                            this.style.transform = 'translateY(0)';
                        });
                    });
                });
            </script>

        </div>
    </div>
</x-app-layout>