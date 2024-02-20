<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Category::factory(4)->create();
        \App\Models\Category::create([
            'name' => 'Makanan',
            'description' => 'Aneka masakan padang',
            'image' => 'img/categories/makanan.jpg',
        ]);
        \App\Models\Category::create([
            'name' => 'Minuman',
            'description' => 'Aneka minuman',
            'image' => 'img/categories/minuman.jpg',
        ]);
        \App\Models\Category::create([
            'name' => 'Snack',
            'description' => 'Aneka makanan ringan',
            'image' => 'img/categories/snack.jpg',
        ]);
    }
}
