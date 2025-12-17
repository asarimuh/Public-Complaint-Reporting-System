<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnotherReportSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reports')->insert([
            [
                'user_id' => 3,
                'description' => 'Lampu lalu lintas di persimpangan utama sering mati mendadak dan menyebabkan hampir terjadi kecelakaan.',
                'type' => 'Lalu Lintas',
                'province' => 'DKI Jakarta',
                'regency' => 'Jakarta Selatan',
                'subdistrict' => 'Kebayoran Baru',
                'village' => 'Senayan',
                'voting' => 18,
                'voted_by' => json_encode([1, 4, 6]),
                'viewers' => 97,
                'image' => 'reports/lampu-lalin-mati.jpg',
                'statement' => 'pending',
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'user_id' => 1,
                'description' => 'Tumpukan sampah liar di bantaran sungai mulai menimbulkan bau tidak sedap dan penyakit.',
                'type' => 'Lingkungan',
                'province' => 'Jawa Barat',
                'regency' => 'Kabupaten Bogor',
                'subdistrict' => 'Cibinong',
                'village' => 'Pabuaran',
                'voting' => 29,
                'voted_by' => json_encode([2, 3, 5, 7]),
                'viewers' => 176,
                'image' => 'reports/sampah-sungai.jpg',
                'statement' => 'on_process',
                'created_at' => Carbon::now()->subDays(9),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 4,
                'description' => 'Marka jalan sudah pudar dan sulit terlihat pada malam hari, terutama saat hujan.',
                'type' => 'Keselamatan',
                'province' => 'Jawa Tengah',
                'regency' => 'Kabupaten Klaten',
                'subdistrict' => 'Klaten Tengah',
                'village' => 'Bareng',
                'voting' => 11,
                'voted_by' => json_encode([1, 2]),
                'viewers' => 64,
                'image' => 'reports/marka-jalan-pudar.jpg',
                'statement' => 'pending',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 5,
                'description' => 'Pohon besar di pinggir jalan retak dan berpotensi tumbang saat angin kencang.',
                'type' => 'Keamanan',
                'province' => 'Jawa Timur',
                'regency' => 'Kabupaten Malang',
                'subdistrict' => 'Lowokwaru',
                'village' => 'Tulusrejo',
                'voting' => 34,
                'voted_by' => json_encode([2, 3, 6, 7, 8]),
                'viewers' => 201,
                'image' => 'reports/pohon-retak.jpg',
                'statement' => 'on_process',
                'created_at' => Carbon::now()->subDays(11),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 2,
                'description' => 'Fasilitas toilet umum di taman kota rusak dan tidak dapat digunakan.',
                'type' => 'Fasilitas Umum',
                'province' => 'Bali',
                'regency' => 'Kota Denpasar',
                'subdistrict' => 'Denpasar Barat',
                'village' => 'Pemecutan',
                'voting' => 7,
                'voted_by' => json_encode([]),
                'viewers' => 39,
                'image' => 'reports/toilet-umum-rusak.jpg',
                'statement' => 'rejected',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 3,
                'description' => 'Jembatan kecil penghubung antar RT mengalami retakan dan licin saat hujan.',
                'type' => 'Infrastruktur',
                'province' => 'Sumatera Utara',
                'regency' => 'Kota Medan',
                'subdistrict' => 'Medan Tembung',
                'village' => 'Sidorejo',
                'voting' => 41,
                'voted_by' => json_encode([1, 2, 4, 5, 6]),
                'viewers' => 287,
                'image' => 'reports/jembatan-retak.jpg',
                'statement' => 'done',
                'created_at' => Carbon::now()->subDays(18),
                'updated_at' => Carbon::now()->subDays(2),
            ],
        ]);
    }
}
