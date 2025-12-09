<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            // -------- Mobiles --------
            [
                'name' => 'iPhone 14 Pro',
                'price' => 1200,
                'description' => 'Latest Apple smartphone with A16 chip and triple camera system.',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9'
            ],
            [
                'name' => 'Samsung Galaxy S23',
                'price' => 999,
                'description' => 'Premium Android phone with high performance and AMOLED display.',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1512499617640-c2f999098c01'
            ],
            [
                'name' => 'OnePlus 11',
                'price' => 850,
                'description' => 'Flagship killer phone with fast charging and clean UI.',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5'
            ],

            // -------- Laptops --------
            [
                'name' => 'MacBook Pro 16"',
                'price' => 2400,
                'description' => 'Powerful Apple laptop with M2 Pro chip for professionals.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f'
            ],
            [
                'name' => 'Dell XPS 13',
                'price' => 1300,
                'description' => 'Compact ultrabook with edge-to-edge infinity display.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8'
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => 1600,
                'description' => 'Premium 2-in-1 laptop with touchscreen and long battery life.',
                'category' => 'laptop',
                'gallery' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085'
            ],

            // -------- Electronics --------
            [
                'name' => 'Sony WH-1000XM4 Headphones',
                'price' => 350,
                'description' => 'Industry leading noise-cancelling wireless headphones.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1517849845537-4d257902454a'
            ],
            [
                'name' => 'Apple Watch Series 8',
                'price' => 500,
                'description' => 'Smartwatch with advanced health and fitness tracking.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b'
            ],
            [
                'name' => 'Xbox Wireless Controller',
                'price' => 69,
                'description' => 'High-quality gaming controller for PC and Xbox.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420'
            ],

            // -------- Extra Products --------
            [
                'name' => 'Wireless Bluetooth Speaker',
                'price' => 120,
                'description' => 'Portable speaker with powerful bass and clear sound.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1484704849700-f032a568e944'
            ],
            [
                'name' => 'Gaming Keyboard RGB',
                'price' => 80,
                'description' => 'Mechanical keyboard with customizable RGB lighting.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1593642532973-d31b6557fa68'
            ],
            [
                'name' => 'Canon DSLR Camera',
                'price' => 700,
                'description' => 'High-quality camera ideal for photography and video shooting.',
                'category' => 'electronics',
                'gallery' => 'https://images.unsplash.com/photo-1519183071298-a2962eadcdb2'
            ],

        ]);
    }
}
