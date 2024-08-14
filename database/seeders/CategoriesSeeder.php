<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
           'title' => 'Airport Travel',
           'created_at' => '2024-06-01 00:00:00',
           'updated_at' => '2024-06-01 00:00:00',
        ]);

        Category::create([
           'title' => 'City Tour',
           'created_at' => '2024-06-01 00:00:00',
           'updated_at' => '2024-06-01 00:00:00',
        ]);

        Category::create([
           'title' => 'Rent Car',
           'created_at' => '2024-06-01 00:00:00',
           'updated_at' => '2024-06-01 00:00:00',
        ]);
    }
}
