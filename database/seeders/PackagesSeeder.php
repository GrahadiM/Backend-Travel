<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TravelPackage::create([
           'category_id' => 1,
           'name' => 'Bandung - Bandara Soekarno Hatta',
           'slug' => 'bandung-soetta',
           'duration' => '12 Jam',
           'location' => 'Bandung atau Bandara Soekarno Hatta',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dari Bandung ke Bandara Soekarno-Hatta atau sebaliknya dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel bandara yang andal.
                        <br><br>Harga: Rp 800.000/kendaraan (maks. 4 orang)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 800000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 1,
           'name' => 'Bandung - Kertajati',
           'slug' => 'bandung-kertajati',
           'duration' => '12 Jam',
           'location' => 'Bandung atau Kertajati',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dari Bandung ke Kertajati atau sebaliknya dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 750.000/kendaraan (maks. 4 orang)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 750000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 2,
           'name' => 'Bandung Tour',
           'slug' => 'bandung-tour',
           'duration' => '12 Jam',
           'location' => 'Bandung dan sekitarnya',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 600.000/kendaraan (maks. 4 orang, belum terhitung Parkir dan Tol)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 600000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 2,
           'name' => 'Jakarta Tour',
           'slug' => 'jakarta-tour',
           'duration' => '12 Jam',
           'location' => 'Jakarta dan sekitarnya',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 600.000/kendaraan (maks. 4 orang, belum terhitung Parkir dan Tol)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 600000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 3,
           'name' => 'Avanza dan Xenia',
           'slug' => 'avanza-xenia',
           'duration' => '12 Jam',
           'location' => 'Bandung, Jakarta dan sekitarnya',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 800.000/kendaraan (maks. 4 orang, belum terhitung Parkir dan Tol)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 800000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 3,
           'name' => 'Sigra dan Kalya',
           'slug' => 'sigra-kalya',
           'duration' => '12 Jam',
           'location' => 'Bandung, Jakarta dan sekitarnya',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 600.000/kendaraan (maks. 4 orang, belum terhitung Parkir dan Tol)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 600000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        TravelPackage::create([
           'category_id' => 3,
           'name' => 'Terios dan Inova',
           'slug' => 'terios-inova',
           'duration' => '12 Jam',
           'location' => 'Bandung, Jakarta dan sekitarnya',
           'description' => 'Nikmati perjalanan yang nyaman dan bebas stres dengan layanan transportasi eksklusif.
                        Paket ini dirancang untuk mengantar Anda tepat waktu dengan kendaraan yang nyaman dan pengemudi profesional.
                        Cocok untuk wisatawan, pebisnis, atau siapa saja yang membutuhkan travel yang andal.
                        <br><br>Harga: Rp 850.000/kendaraan (maks. 4 orang, belum terhitung Parkir dan Tol)
                        <br><br>Fitur Paket:
                        <br>Kendaraan Nyaman: Pilihan kendaraan mulai dari sedan mewah hingga van untuk keluarga.
                        <br>Pengemudi Profesional: Pengemudi berpengalaman dan ramah yang siap membantu selama perjalanan.
                        <br>Fleksibilitas Waktu: Tersedia layanan 24 jam untuk menyesuaikan jadwal penerbangan Anda.
                        <br>Air Mineral & Snack: Disediakan air mineral dan snack ringan selama perjalanan.
                        <br>Wi-Fi Gratis: Akses internet gratis di dalam kendaraan untuk kebutuhan komunikasi Anda.
                        <br>Asuransi Perjalanan: Termasuk asuransi perjalanan untuk kenyamanan dan keamanan tambahan.
                        ',
           'price' => 850000,
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);
    }
}
