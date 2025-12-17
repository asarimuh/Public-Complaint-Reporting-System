<x-app-layout>
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Header -->
        <div class="relative bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-800 text-white">
            <div class="absolute inset-0">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply blur-3xl opacity-20"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-500 rounded-full mix-blend-multiply blur-3xl opacity-20"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <!-- User Avatar -->
                        <div class="relative">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white text-2xl font-bold shadow-sm">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 rounded-full bg-green-500 border-4 border-white flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold mb-1">{{ Auth::user()->name }}</h1>
                            <p class="text-blue-100">{{ Auth::user()->email }}</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/20 backdrop-blur-sm">
                                    @php
                                        $roleNames = [
                                            'USER' => 'Masyarakat',
                                            'STAFF' => 'Petugas',
                                            'HEAD_STAFF' => 'Kepala Petugas'
                                        ];
                                    @endphp
                                    {{ $roleNames[Auth::user()->role] ?? Auth::user()->role }}
                                </span>
                                <span class="text-sm text-blue-100">
                                    Bergabung {{ Auth::user()->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard') }}" 
                           class="inline-flex items-center px-4 py-2.5 bg-white/20 backdrop-blur-sm text-white rounded-xl font-medium hover:bg-white/30 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Stats & Quick Actions -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- User Stats -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h3 class="font-semibold text-gray-800 mb-4 text-lg">Statistik Akun</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Total Laporan</p>
                                        <p class="text-xl font-bold text-gray-800">{{ $reports->count() }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                        <span class="text-sm text-gray-600">Pending</span>
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $reports->where('statement', 'pending')->count() }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                        <span class="text-sm text-gray-600">Dalam Proses</span>
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $reports->where('statement', 'on_process')->count() }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                        <span class="text-sm text-gray-600">Selesai</span>
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $reports->where('statement', 'done')->count() }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                        <span class="text-sm text-gray-600">Ditolak</span>
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $reports->where('statement', 'rejected')->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h3 class="font-semibold text-gray-800 mb-4 text-lg">Aksi Cepat</h3>
                        <div class="space-y-3">
                            <a href="{{ route('user.report.create') }}" 
                               class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 text-blue-700 transition-all duration-300 group">
                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Buat Laporan Baru</p>
                                    <p class="text-sm text-blue-600/70">Laporkan masalah di sekitar Anda</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('user.reports') }}" 
                               class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 text-green-700 transition-all duration-300 group">
                                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Lihat Semua Laporan</p>
                                    <p class="text-sm text-green-600/70">Pantau perkembangan laporan Anda</p>
                                </div>
                            </a>
                            
                            <a href="#reports" 
                               class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 text-purple-700 transition-all duration-300 group">
                                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Laporan Terbaru</p>
                                    <p class="text-sm text-purple-600/70">Scroll ke bawah</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Profile Forms -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Profile Information Form -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-white">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Informasi Profil
                            </h3>
                            <p class="text-sm text-gray-600 mt-1">Perbarui nama dan email akun Anda</p>
                        </div>
                        <div class="p-6">
                            <div class="max-w-2xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>

                    <!-- Password Update Form -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-green-50 to-white">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                Ubah Kata Sandi
                            </h3>
                            <p class="text-sm text-gray-600 mt-1">Ganti kata sandi untuk keamanan akun</p>
                        </div>
                        <div class="p-6">
                            <div class="max-w-2xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                    </div>

                    <!-- Account Delete Section -->
                    <div class="bg-white rounded-2xl shadow-sm border border-red-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-red-100 bg-gradient-to-r from-red-50 to-white">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Hapus Akun
                            </h3>
                            {{-- <p class="text-sm text-red-600 mt-1">Tindakan ini permanen dan tidak dapat dibatalkan</p> --}}
                        </div>
                        <div class="p-6">
                            <div class="max-w-2xl">
                                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-red-800">Perhatian</h4>
                                            <p class="text-sm text-red-600 mt-1">
                                                Setelah akun dihapus, semua data termasuk laporan yang telah Anda buat akan dihapus secara permanen. 
                                                Pastikan Anda telah mencadangkan data penting sebelum melanjutkan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Reports Section -->
            <div id="reports" class="mt-12">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Laporan Terbaru Anda
                                </h3>
                                <p class="text-sm text-gray-600 mt-1">5 laporan terakhir yang telah Anda buat</p>
                            </div>
                            <a href="{{ route('user.reports') }}" 
                               class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 hover:text-blue-700 transition-colors">
                                Lihat Semua
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        @if($reports->isEmpty())
                            <div class="text-center py-8">
                                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-700 mb-2">Belum Ada Laporan</h4>
                                <p class="text-gray-600 max-w-md mx-auto mb-4">
                                    Anda belum membuat laporan pengaduan. Mulai laporkan masalah di sekitar Anda.
                                </p>
                                <a href="{{ route('user.report.create') }}" 
                                   class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold hover:shadow-sm transition-all duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                    Buat Laporan Pertama
                                </a>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($reports->take(5) as $report)
                                    <div class="group flex items-center justify-between p-4 rounded-xl border border-gray-100 hover:bg-gray-50 transition-colors duration-200">
                                        <div class="flex items-center gap-4">
                                            <!-- Status Indicator -->
                                            <div class="relative">
                                                @php
                                                    $statusColors = [
                                                        'pending' => 'bg-yellow-500',
                                                        'on_process' => 'bg-blue-500',
                                                        'done' => 'bg-green-500',
                                                        'rejected' => 'bg-red-500'
                                                    ];
                                                    $color = $statusColors[$report->statement] ?? 'bg-gray-500';
                                                @endphp
                                                <div class="w-3 h-3 rounded-full {{ $color }}"></div>
                                            </div>
                                            
                                            <!-- Report Info -->
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-medium text-gray-800 truncate">{{ Str::limit($report->description, 60) }}</h4>
                                                <div class="flex flex-wrap items-center gap-3 mt-1">
                                                    <span class="text-sm text-gray-600">{{ $report->type }}</span>
                                                    <span class="text-sm text-gray-500">•</span>
                                                    <span class="text-sm text-gray-600">{{ $report->province }}</span>
                                                    <span class="text-sm text-gray-500">•</span>
                                                    <span class="text-sm text-gray-500">{{ $report->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Action -->
                                        <a href="{{ route('user.report.show', $report->id) }}" 
                                           class="flex items-center gap-2 px-3 py-1.5 text-sm text-blue-600 hover:text-blue-700 transition-colors opacity-0 group-hover:opacity-100">
                                            Lihat
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            
                            @if($reports->count() > 5)
                                <div class="mt-6 pt-6 border-t border-gray-100">
                                    <a href="{{ route('user.reports') }}" 
                                       class="block w-full text-center px-4 py-2.5 border border-gray-300 text-gray-700 rounded-xl font-medium hover:border-gray-400 hover:bg-gray-50 transition-all duration-300">
                                        Tampilkan Semua Laporan ({{ $reports->count() }})
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        /* Smooth transitions */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Form focus states */
        input:focus, textarea:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            ring-width: 2px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add confirmation to delete account button
            const deleteForm = document.querySelector('form[action*="profile"] button[type="submit"]');
            if (deleteForm) {
                deleteForm.addEventListener('click', function(e) {
                    if (!confirm('Apakah Anda yakin ingin menghapus akun? Tindakan ini tidak dapat dibatalkan.')) {
                        e.preventDefault();
                    } else {
                        // Add loading state
                        this.classList.add('opacity-75', 'cursor-not-allowed');
                        this.innerHTML = `
                            <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Menghapus...
                        `;
                    }
                });
            }
            
            // Smooth scroll to reports section
            const reportLinks = document.querySelectorAll('a[href="#reports"]');
            reportLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.getElementById('reports');
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
            
            // Animate stats on load
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statElements = entry.target.querySelectorAll('.text-xl.font-bold');
                        statElements.forEach((stat, index) => {
                            const targetNumber = parseInt(stat.textContent);
                            if (!isNaN(targetNumber)) {
                                let currentNumber = 0;
                                const increment = targetNumber / 30;
                                const timer = setInterval(() => {
                                    currentNumber += increment;
                                    if (currentNumber >= targetNumber) {
                                        stat.textContent = targetNumber;
                                        clearInterval(timer);
                                    } else {
                                        stat.textContent = Math.floor(currentNumber);
                                    }
                                }, 40);
                            }
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe stats section
            const statsSection = document.querySelector('.bg-white.rounded-2xl.shadow-sm.border.border-gray-100.p-6');
            if (statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>
</x-app-layout>