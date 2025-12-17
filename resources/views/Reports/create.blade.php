<x-app-layout>
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white mb-[200px]">
        <!-- Header -->
        <div class="relative bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-800 text-white">
            <div class="absolute inset-0">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply blur-3xl opacity-20"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-500 rounded-full mix-blend-multiply blur-3xl opacity-20"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                    <div>
                        <nav class="flex items-center gap-2 text-sm text-blue-100 mb-3">
                            <a href="{{ route('report.store') }}" class="hover:text-white transition-colors">Pengaduan Saya</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Buat Pengaduan Baru</span>
                        </nav>
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">Buat Laporan Baru</h1>
                        <p class="text-blue-100 max-w-3xl">
                            Laporkan masalah atau kejadian di sekitar Anda. Pastikan informasi yang Anda berikan akurat dan dapat dipertanggungjawabkan.
                        </p>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <a href="{{ route('report.index') }}" 
                           class="inline-flex items-center px-4 py-2.5 bg-white/20 backdrop-blur-sm text-white rounded-xl font-medium hover:bg-white/30 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Information Card -->
            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border border-blue-100 rounded-2xl p-6 mb-8">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-white rounded-xl shadow-sm">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800 mb-2">Penting untuk Diperhatikan</h3>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Data yang Anda berikan harus <strong class="text-gray-900">BENAR</strong> dan dapat dipertanggungjawabkan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Semua kolom bertanda <span class="text-red-500 font-semibold">*</span> wajib diisi</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-blue-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                <span>Pengaduan akan ditanggapi dalam <strong class="text-gray-900">2x24 jam</strong> kerja</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">
                <!-- Form Header -->
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
                    <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Formulir Pengaduan
                    </h2>
                    <p class="text-sm text-gray-600 mt-1">Isi semua informasi dengan lengkap dan akurat</p>
                </div>

                <!-- Form Content -->
                <form action="{{ route('user.report.store') }}" method="POST" enctype="multipart/form-data" 
                      class="p-6 space-y-8" id="reportForm">
                    @csrf

                    <!-- Description -->
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <label for="description" class="block text-sm font-semibold text-gray-700 flex items-center gap-1">
                                Deskripsi Laporan
                                <span class="text-red-500">*</span>
                            </label>
                            <span class="text-xs text-gray-500" id="charCount">0/500 karakter</span>
                        </div>
                        <div class="relative">
                            <textarea name="description" 
                                      id="description" 
                                      rows="4"
                                      maxlength="500"
                                      class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-gray-400"
                                      placeholder="Jelaskan secara detail masalah atau kejadian yang Anda laporkan..."
                                      required></textarea>
                            <div class="absolute bottom-2 right-2 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">
                            Berikan deskripsi yang jelas dan lengkap untuk membantu petugas memahami situasi.
                        </p>
                    </div>

                    <!-- Report Type -->
                    <div class="space-y-3">
                        <label for="type" class="block text-sm font-semibold text-gray-700 flex items-center gap-1">
                            Jenis Laporan
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select name="type" 
                                    id="type" 
                                    class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none appearance-none transition-all duration-200 bg-white pr-10"
                                    required>
                                <option value="" disabled selected class="text-gray-400">Pilih jenis laporan</option>
                                <option value="KEJAHATAN">🚨 Kejahatan</option>
                                <option value="PEMBANGUNAN">🏗️ Pembangunan</option>
                                <option value="SOSIAL">👥 Sosial</option>
                                <option value="KECELAKAAN">🚑 Kecelakaan</option>
                                <option value="LINGKUNGAN">🌳 Lingkungan</option>
                                <option value="KESEHATAN">🏥 Kesehatan</option>
                                <option value="KEAMANAN">🛡️ Keamanan</option>
                                <option value="KERUSAKAAN PROPERTI">🏠 Kerusakan Properti</option>
                                <option value="LAINNYA">📋 Lainnya</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Location Grid -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <h3 class="font-semibold text-gray-700">Informasi Lokasi</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Province -->
                            <div class="space-y-2">
                                <label for="province" class="block text-sm font-medium text-gray-700 flex items-center gap-1">
                                    Provinsi
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           name="province" 
                                           id="province"
                                           class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-gray-400"
                                           placeholder="Contoh: Jawa Barat"
                                           required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Regency -->
                            <div class="space-y-2">
                                <label for="regency" class="block text-sm font-medium text-gray-700 flex items-center gap-1">
                                    Kabupaten/Kota
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           name="regency" 
                                           id="regency"
                                           class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-gray-400"
                                           placeholder="Contoh: Bandung"
                                           required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Subdistrict -->
                            <div class="space-y-2">
                                <label for="subdistrict" class="block text-sm font-medium text-gray-700 flex items-center gap-1">
                                    Kecamatan
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           name="subdistrict" 
                                           id="subdistrict"
                                           class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-gray-400"
                                           placeholder="Contoh: Cimahi Selatan"
                                           required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Village -->
                            <div class="space-y-2">
                                <label for="village" class="block text-sm font-medium text-gray-700 flex items-center gap-1">
                                    Desa/Kelurahan
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           name="village" 
                                           id="village"
                                           class="block w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-gray-400"
                                           placeholder="Contoh: Cibabat"
                                           required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <h3 class="font-semibold text-gray-700">Upload Bukti Foto (Opsional)</h3>
                        </div>
                        
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 text-center hover:border-blue-400 transition-colors duration-200 bg-gray-50/50">
                            <input type="file" 
                                   name="image" 
                                   id="image" 
                                   accept="image/*"
                                   class="hidden"
                                   onchange="previewImage(event)">
                            
                            <div id="uploadArea" onclick="document.getElementById('image').click()" class="cursor-pointer">
                                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="mb-2">
                                    <p class="font-medium text-gray-700">Klik untuk upload gambar</p>
                                    <p class="text-sm text-gray-500">atau drag and drop file di sini</p>
                                </div>
                                <p class="text-xs text-gray-400">PNG, JPG, GIF maksimal 5MB</p>
                            </div>
                            
                            <!-- Image Preview -->
                            <div id="imagePreview" class="hidden mt-4">
                                <div class="relative inline-block">
                                    <img id="preview" class="w-48 h-48 object-cover rounded-xl shadow-md">
                                    <button type="button" 
                                            onclick="removeImage()"
                                            class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <p class="text-xs text-gray-500">
                            Upload foto sebagai bukti pendukung. Gambar akan membantu petugas memahami situasi dengan lebih baik.
                        </p>
                    </div>

                    <!-- Form Actions -->
                    <div class="pt-6 border-t border-gray-100">
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                            <a href="{{ route('user.reports') }}" 
                               class="inline-flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 w-full sm:w-auto justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Batal
                            </a>
                            
                            <button type="submit" 
                                    class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 active:scale-95 w-full sm:w-auto justify-center group">
                                <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Kirim Laporan</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Smooth transitions */
        select, input, textarea {
            transition: all 0.2s ease;
        }
        
        /* Character count styling */
        .char-limit {
            font-size: 0.75rem;
        }
    </style>

    <script>
        // Character counter for description
        document.addEventListener('DOMContentLoaded', function() {
            const descriptionTextarea = document.getElementById('description');
            const charCount = document.getElementById('charCount');
            
            descriptionTextarea.addEventListener('input', function() {
                const currentLength = this.value.length;
                const maxLength = this.maxLength;
                charCount.textContent = `${currentLength}/${maxLength} karakter`;
                
                // Change color when approaching limit
                if (currentLength > maxLength * 0.8) {
                    charCount.classList.add('text-orange-500');
                    charCount.classList.remove('text-gray-500');
                } else if (currentLength > maxLength * 0.9) {
                    charCount.classList.add('text-red-500');
                    charCount.classList.remove('text-orange-500');
                } else {
                    charCount.classList.remove('text-orange-500', 'text-red-500');
                    charCount.classList.add('text-gray-500');
                }
            });
            
            // Initialize with current value
            descriptionTextarea.dispatchEvent(new Event('input'));
            
            // Form validation
            const form = document.getElementById('reportForm');
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');
                        field.classList.remove('border-gray-300');
                    } else {
                        field.classList.remove('border-red-500');
                        field.classList.add('border-gray-300');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    // Scroll to first error
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                    
                    // Show error message
                    const errorMsg = document.createElement('div');
                    errorMsg.className = 'mb-4 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm';
                    errorMsg.innerHTML = `
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <span>Harap lengkapi semua kolom yang wajib diisi.</span>
                        </div>
                    `;
                    
                    // Remove existing error message if any
                    const existingError = form.querySelector('.bg-red-50');
                    if (existingError) existingError.remove();
                    
                    // Insert error message at top of form
                    form.insertBefore(errorMsg, form.firstChild);
                } else {
                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
                    submitBtn.innerHTML = `
                        <svg class="animate-spin w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Mengirim...
                    `;
                }
            });
            
            // Add input validation on blur
            const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        this.classList.add('border-red-500');
                    } else {
                        this.classList.remove('border-red-500');
                    }
                });
                
                input.addEventListener('input', function() {
                    if (this.value.trim()) {
                        this.classList.remove('border-red-500');
                    }
                });
            });
        });
        
        // Image preview functionality
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('imagePreview');
            const uploadArea = document.getElementById('uploadArea');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                    uploadArea.classList.add('hidden');
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function removeImage() {
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('imagePreview');
            const uploadArea = document.getElementById('uploadArea');
            
            fileInput.value = '';
            previewContainer.classList.add('hidden');
            uploadArea.classList.remove('hidden');
        }
        
        // Drag and drop functionality
        document.addEventListener('DOMContentLoaded', function() {
            const dropArea = document.getElementById('uploadArea');
            const fileInput = document.getElementById('image');
            
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
            });
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });
            
            function highlight() {
                dropArea.classList.add('border-blue-400', 'bg-blue-50');
            }
            
            function unhighlight() {
                dropArea.classList.remove('border-blue-400', 'bg-blue-50');
            }
            
            dropArea.addEventListener('drop', handleDrop, false);
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length > 0) {
                    fileInput.files = files;
                    const event = new Event('change', { bubbles: true });
                    fileInput.dispatchEvent(event);
                }
            }
        });
    </script>
</x-app-layout>