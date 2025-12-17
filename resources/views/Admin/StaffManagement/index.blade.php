<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8 space-y-6">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Staff Management</h1>
                <p class="text-sm text-gray-500">
                    Kelola akun staff, peran, dan wilayah kerja
                </p>
            </div>

            <a href="{{ route('staff-management.create') }}"
               class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700">
                ➕ Tambah Staff
            </a>
        </div>
        <!-- FILTER -->
        <div class="bg-white border border-gray-200 rounded-2xl p-4 max-w-sm">
            <form method="GET" action="{{ route('staff-management.index') }}">
                <label class="text-sm font-medium text-gray-600 mb-1 block">
                    Filter berdasarkan role
                </label>
                <select name="role" onchange="this.form.submit()"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500">
                    <option value="STAFF" @selected($roleFilter == 'STAFF')>Staff</option>
                    <option value="GUEST" @selected($roleFilter == 'GUEST')>Guest</option>
                    <option value="HEAD_STAFF" @selected($roleFilter == 'HEAD_STAFF')>Head Staff</option>
                </select>
            </form>
        </div>
        <!-- TABLE -->
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 border-b text-gray-600">
                        <tr>
                            <th class="px-5 py-3 text-left">ID</th>
                            <th class="px-5 py-3 text-left">Nama</th>
                            <th class="px-5 py-3 text-left">Email</th>
                            <th class="px-5 py-3 text-left">Role</th>
                            <th class="px-5 py-3 text-left">Provinsi</th>
                            <th class="px-5 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        @forelse($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-4 text-gray-500">
                                    #{{ $user->id }}
                                </td>

                                <td class="px-5 py-4 font-medium text-gray-800">
                                    {{ $user->name }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ $user->email }}
                                </td>

                                <td class="px-5 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold
                                        @if($user->role === 'HEAD_STAFF') bg-purple-100 text-purple-700
                                        @elseif($user->role === 'STAFF') bg-blue-100 text-blue-700
                                        @else bg-gray-100 text-gray-700
                                        @endif">
                                        {{ str_replace('_', ' ', $user->role) }}
                                    </span>
                                </td>

                                <td class="px-5 py-4">
                                    {{ $user->staffProvinces->first()->province ?? '—' }}
                                </td>

                                <td class="px-5 py-4 text-right">
                                    <div class="inline-flex gap-3">
                                        <a href="{{ route('staff-management.edit', $user->id) }}" 
                                                   class="inline-flex items-center px-3 py-1.5 bg-yellow-50 text-yellow-600 rounded-lg hover:bg-yellow-100 transition-colors duration-200 text-sm">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                    Edit
                                                </a>

                                        <form action="{{ route('staff-management.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
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
                        @empty
                            <tr>
                                <td colspan="6" class="py-10 text-center text-gray-500">
                                    Tidak ada user ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t">
                {{ $users->links('pagination::tailwind') }}
            </div>
        </div>

    </div>
</x-app-layout>
