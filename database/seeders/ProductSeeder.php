<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Product::factory(4)->create();

        \App\Models\Product::create([
            'category_id' => 1,
            'name' => 'Nasi Rendang',
            'description' => 'Paket nasi putih, rendang sapi, sayur nangka, daun singkong dan sambal',
            'image' => 'img/products/makanan/nasi-rendang.jpeg',
            'price' => 28000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);

        \App\Models\Product::create([
            'category_id' => 1,
            'name' => 'Nasi Kikil',
            'description' => 'Paket nasi putih, gulai kikil sapi, sayur nangka, daun singkong dan sambal',
            'image' => 'img/products/makanan/nasi-kikil.jpg',
            'price' => 35000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);

        \App\Models\Product::create([
            'category_id' => 1,
            'name' => 'Nasi Gulai Otak',
            'description' => 'Paket nasi putih, gulai otak sapi, sayur nangka, daun singkong dan sambal',
            'image' => 'img/products/makanan/nasi-gulai-otak.jpg',
            'price' => 32000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);

        \App\Models\Product::create([
            'category_id' => 2,
            'name' => 'Es Jeruk',
            'description' => 'Es jeruk segar dengan potongan jeruk dan es batu',
            'image' => 'img/products/minuman/es-jeruk.jpg',
            'price' => 15000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);

        \App\Models\Product::create([
            'category_id' => 2,
            'name' => 'Es Teh Tawar',
            'description' => 'Es teh tawar segar',
            'image' => 'img/products/minuman/es-teh-tawar.jpeg',
            'price' => 5000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);

        \App\Models\Product::create([
            'category_id' => 3,
            'name' => 'Krupuk Aci',
            'description' => 'Krupuk aci renyah',
            'image' => 'img/products/snack/kerupuk-aci.jpg',
            'price' => 1000,
            'stock' => 100,
            'status' => 1,
            'is_favorite' => 0
        ]);
    }
}
