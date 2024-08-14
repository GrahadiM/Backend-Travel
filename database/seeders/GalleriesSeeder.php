<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
           'travel_package_id' => 1,
           'path' => 'assets/gallery/jo2TF67zESY9W7NuAjtN0c42MVo6TEVxxJfbMext.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 2,
           'path' => 'assets/gallery/WXmzcGvgeNIsKkyvAQ7fBbtUrCbpdcS3QFDSbBou.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 3,
           'path' => 'assets/gallery/citytour.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 4,
           'path' => 'assets/gallery/rentcar.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 5,
           'path' => 'assets/gallery/rentcar.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 6,
           'path' => 'assets/gallery/rentcar.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);

        Gallery::create([
           'travel_package_id' => 7,
           'path' => 'assets/gallery/rentcar.jpg',
           'created_at' => '2024-06-01 00:00:01',
           'updated_at' => '2024-06-01 00:00:01',
        ]);
    }
}
