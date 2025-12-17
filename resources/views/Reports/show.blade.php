<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">

        <!-- IMAGE HERO -->
        <div class="relative rounded-3xl overflow-hidden shadow-sm border border-gray-100 mb-10">
            @if($report->image)
                <img src="{{ asset('storage/' . $report->image) }}"
                     class="w-full h-[520px] object-cover">
            @else
                <div class="h-[520px] flex items-center justify-center bg-gray-100 text-gray-400">
                    Tidak ada gambar
                </div>
            @endif

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

            <!-- Overlay Content -->
            <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 text-white">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">

                    <div>
                        <span class="text-sm opacity-90">ID Pengaduan</span>
                        <h1 class="text-3xl font-bold tracking-tight">
                            #{{ $report->id }}
                        </h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="px-4 py-1.5 rounded-full text-sm font-semibold
                            @if($report->statement === 'pending') bg-yellow-500
                            @elseif($report->statement === 'on_process') bg-blue-500
                            @elseif($report->statement === 'done') bg-green-500
                            @elseif($report->statement === 'rejected') bg-red-500
                            @endif">
                            {{ ucfirst(str_replace('_', ' ', $report->statement)) }}
                        </span>

                        @php
                            $votedBy = $report->voted_by ? json_decode($report->voted_by, true) : [];
                        @endphp

                        @if(in_array(auth()->id(), $votedBy))
                            <button class="px-5 py-2 rounded-xl bg-white/20 text-white cursor-not-allowed">
                                👍 {{ $report->voting }}
                            </button>
                        @else
                            <form action="{{ route('report.vote', $report->id) }}" method="POST">
                                @csrf
                                <button class="px-5 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 transition">
                                    👍 {{ $report->voting }}
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- LEFT CONTENT -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Description -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-3">Deskripsi Laporan</h2>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $report->description }}
                    </p>
                </div>

                <!-- Update Status Section (if user is staff) -->
            @if(auth()->user()->role === 'STAFF')
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <form action="{{ route('report.updateStatus', $report->id) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="statement" class="form-label">Update Report Status</label>
                        <select name="statement" id="statement" class="form-control" required
                                @if($report->statement === 'done') disabled @endif>
                            <option value="on_process" {{ $report->statement == 'on_process' ? 'selected' : '' }}>On Process</option>
                            <option value="done" {{ $report->statement == 'done' ? 'selected' : '' }}>Done</option>
                            <option value="rejected" {{ $report->statement == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>
                    @if($report->statement !== 'done')
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    @else
                        <button type="button" class="btn btn-secondary" disabled>Laporan telah ditangani</button>
                    @endif
                </form>
            </div>

            @endif

                <!-- Comments -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-4">Komentar</h2>

                    <form action="{{ route('admin.report.comment', $report->id) }}" method="POST" class="mb-5">
                        @csrf
                        <textarea name="comment"
                                  rows="3"
                                  class="w-full rounded-xl border border-gray-300 p-4 focus:ring-2 focus:ring-blue-500"
                                  placeholder="Tulis komentar Anda..."
                                  required></textarea>
                        <button class="mt-3 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl">
                            Kirim Komentar
                        </button>
                    </form>

                    <div class="space-y-4">
                        @forelse($report->comments as $comment)
                            <div class="border border-gray-100 rounded-xl p-4">
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="font-semibold">{{ $comment->user->name }}</span>
                                    <span class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-gray-700">{{ $comment->comment }}</p>
                            </div>
                        @empty
                            <p class="text-gray-500">Belum ada komentar.</p>
                        @endforelse
                    </div>
                </div>

            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="space-y-6">

                <!-- Location -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-4">Lokasi</h2>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li><span class="text-gray-500">Provinsi:</span> {{ $report->province }}</li>
                        <li><span class="text-gray-500">Kabupaten:</span> {{ $report->regency }}</li>
                        <li><span class="text-gray-500">Kecamatan:</span> {{ $report->subdistrict }}</li>
                        <li><span class="text-gray-500">Desa:</span> {{ $report->village }}</li>
                    </ul>
                </div>

                <!-- Stats -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-4">Statistik</h2>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Dilihat</span>
                        <span class="font-semibold">{{ $report->viewers }}</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
