<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'upgadget',
            'email' => 'upgadget@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Kategori::create([
            'id' => '1',
            'name' => 'Apple',
            'slug' => 'Apple',
        ]);

        Kategori::create([
            'id' => '2',
            'name' => 'Redmi',
            'slug' => 'Redmi'
        ]);

        Kategori::create([
            'id' => '3',
            'name' => 'Oppo',
            'slug' => 'Oppo'
        ]);

        Kategori::create([
            'id' => '4',
            'name' => 'Samsung',
            'slug' => 'Samsung'
        ]);

        Product::create([
            'nama_product' => 'Iphone X',
            'slug' => 'Iphone X',
            'harga' => 5500000,
            'deskripsi' => 'This is iPhone X from Apple',
            'kategori_id' => 1,
            'stok' => 10,
            'gambar' => 'iphonex.jpg' 
        ]);
    }
}
