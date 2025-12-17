<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reports')->insert([
            [
                'user_id' => 1,
                'description' => 'Lampu jalan di Jl. Merdeka mati total sejak 3 hari lalu dan sangat membahayakan pengendara malam hari.',
                'type' => 'Infrastruktur',
                'province' => 'DKI Jakarta',
                'regency' => 'Jakarta Pusat',
                'subdistrict' => 'Gambir',
                'village' => 'Cideng',
                'voting' => 12,
                'voted_by' => json_encode([2, 3, 5]),
                'viewers' => 89,
                'image' => 'reports/lampu-jalan.jpg',
                'statement' => 'on_process',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 2,
                'description' => 'Saluran air tersumbat menyebabkan banjir kecil setiap hujan deras di sekitar pemukiman warga.',
                'type' => 'Lingkungan',
                'province' => 'Jawa Barat',
                'regency' => 'Kota Bandung',
                'subdistrict' => 'Coblong',
                'village' => 'Dago',
                'voting' => 27,
                'voted_by' => json_encode([1, 3, 4, 6]),
                'viewers' => 143,
                'image' => 'reports/air-tersumbat.jpg',
                'statement' => 'pending',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 3,
                'description' => 'Jalan berlubang cukup dalam di dekat sekolah dasar dan sering menyebabkan kecelakaan.',
                'type' => 'Infrastruktur',
                'province' => 'Jawa Tengah',
                'regency' => 'Kota Semarang',
                'subdistrict' => 'Tembalang',
                'village' => 'Bulusan',
                'voting' => 45,
                'voted_by' => json_encode([1, 2, 4, 5, 6, 7]),
                'viewers' => 310,
                'image' => 'reports/jalan-berlubang.jpg',
                'statement' => 'done',
                'created_at' => Carbon::now()->subDays(14),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 2,
                'description' => 'Laporan parkir liar di depan pasar yang menyebabkan kemacetan parah setiap pagi.',
                'type' => 'Ketertiban Umum',
                'province' => 'Banten',
                'regency' => 'Kota Tangerang',
                'subdistrict' => 'Karawaci',
                'village' => 'Bugel',
                'voting' => 8,
                'voted_by' => json_encode([]),
                'viewers' => 51,
                'image' => 'reports/parkir-liar.jpg',
                'statement' => 'rejected',
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 2,
                'description' => 'Tiang listrik miring dan hampir roboh setelah hujan deras. Warga khawatir akan membahayakan anak-anak yang sering melintas.',
                'type' => 'Keamanan',
                'province' => 'DI Yogyakarta',
                'regency' => 'Kabupaten Sleman',
                'subdistrict' => 'Depok',
                'village' => 'Caturtunggal',
                'voting' => 33,
                'voted_by' => json_encode([1, 2, 3, 5, 7]),
                'viewers' => 214,
                'image' => 'reports/tiang-listrik-miring.jpg',
                'statement' => 'on_process',
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 2,
                'description' => 'Trotoar rusak dan tidak rata sehingga menyulitkan pejalan kaki, terutama lansia dan pengguna kursi roda.',
                'type' => 'Infrastruktur',
                'province' => 'Jawa Timur',
                'regency' => 'Kota Surabaya',
                'subdistrict' => 'Wonokromo',
                'village' => 'Darmo',
                'voting' => 21,
                'voted_by' => json_encode([2, 4, 6, 8]),
                'viewers' => 134,
                'image' => 'reports/trotoar-rusak.jpg',
                'statement' => 'pending',
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
        ]);
    }
}
