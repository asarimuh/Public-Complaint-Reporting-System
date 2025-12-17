<x-guest-layout>
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-gradient-to-br from-slate-50 via-white to-blue-50">

        <!-- Left Panel: Branding & Features -->
        <div class="relative hidden lg:flex flex-col justify-between p-12 xl:p-16 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-900 text-white overflow-hidden">
          
            <!-- Main Content -->
            <div class="relative z-10">
                <!-- Logo/Brand -->
                <div class="mb-12">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold tracking-tight">
                            Pengaduan<span class="text-cyan-300">Ku</span>
                        </h1>
                    </div>
                </div>
        
                <!-- Hero Text -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-4 leading-tight">
                        Bersama Membangun
                        <span class="block text-cyan-300">Lingkungan yang Lebih Baik</span>
                    </h2>
                    <p class="text-lg text-blue-100/90 max-w-lg">
                        Platform pengaduan masyarakat yang memudahkan Anda melaporkan masalah lingkungan, fasilitas publik, dan layanan daerah secara transparan.
                    </p>
                </div>

                <!-- Features List -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 transition-all duration-300 group hover:translate-x-2">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Pelaporan Real-time</h3>
                            <p class="text-blue-100/80 text-sm">Buat laporan dengan lokasi dan bukti foto secara langsung</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 transition-all duration-300 group hover:translate-x-2">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Pantau Status</h3>
                            <p class="text-blue-100/80 text-sm">Lacak perkembangan dan tanggapan petugas secara real-time</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 transition-all duration-300 group hover:translate-x-2">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-4.201a6 6 0 01-9 5.197"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Sistem Berbasis Peran</h3>
                            <p class="text-blue-100/80 text-sm">Akses terkontrol untuk User, Staff, dan Head Staff</p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>

        <!-- Right Panel: Register Form -->
        <div class="flex items-center justify-center p-6 md:p-12">
            <div class="relative w-full max-w-md">
                <div class="relative bg-white/90 backdrop-blur-sm border border-white/40 rounded-2xl shadow-2xl overflow-hidden">

                    <div class="h-2 bg-gradient-to-r from-blue-500 via-cyan-500 to-indigo-500"></div>

                    <div class="p-8 md:p-10">
                        <!-- Header -->
                        <div class="text-center mb-10">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-cyan-100 mb-4 border border-blue-200">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-slate-800 mb-2">
                                Create your account
                            </h2>
                            <p class="text-slate-600">
                                Join PengaduanKu and start reporting today
                            </p>
                        </div>

                        <!-- Error Messages -->
                        @if ($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-gradient-to-r from-red-50 to-pink-50 border border-red-200">
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Register Form -->
                        <form method="POST" action="{{ route('register') }}" class="space-y-6">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                       class="mt-1 block w-full px-4 py-3.5 rounded-xl border border-slate-300 bg-slate-50/50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                       class="mt-1 block w-full px-4 py-3.5 rounded-xl border border-slate-300 bg-slate-50/50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Password -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Password</label>
                                <input type="password" name="password" required
                                       class="mt-1 block w-full px-4 py-3.5 rounded-xl border border-slate-300 bg-slate-50/50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Confirm Password</label>
                                <input type="password" name="password_confirmation" required
                                       class="mt-1 block w-full px-4 py-3.5 rounded-xl border border-slate-300 bg-slate-50/50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Submit -->
                            <button type="submit"
                                    class="w-full py-4 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all">
                                Create Account
                            </button>
                        </form>

                        <!-- Login link -->
                        <div class="mt-8 text-center text-sm text-slate-600">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">
                                Sign in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
