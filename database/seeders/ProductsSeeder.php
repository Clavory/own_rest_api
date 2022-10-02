<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Akko CS Mechanical Switch Keyboard Replacement 45 pcs (Silver Switch)',
            'description' => 'Sample Switch Description',
            'currency' => 'PHP',
            'price' => 675.00,
            'brand' => 'Akko',
            'category' => 'switches',
            'image' => 'https://cdn.shopify.com/s/files/1/0355/8296/7943/products/51s9X8zxiEL._AC_SL1500_400x.jpg?v=1643677003',
        ]);

        DB::table('products')->insert([
            'title' => 'Akko 3068S Shine-Through RGB Hot-Swappable Mechanical Keyboard Black (Akko CS Jelly Pink)',
            'description' => 'Sample Keyboard Description',
            'currency' => 'PHP',
            'price' => 3590.00,
            'brand' => 'Akko',
            'category' => 'keyboard',
            'image' => 'https://cdn.shopify.com/s/files/1/0355/8296/7943/products/3068ST-jelly-pink-6925758619387_500x.jpg?v=1658310259'
        ]);

        DB::table('products')->insert([
            'title' => 'Akko Blue On White Full Keycaps Set ASA 197 Keys',
            'description' => 'Sample Keycaps Description',
            'currency' => 'PHP',
            'price' => 2450.00,
            'brand' => 'Akko',
            'category' => 'keycaps',
            'image' => 'https://cdn.shopify.com/s/files/1/0355/8296/7943/products/ASA-_-1_1800x1800_6b92405f-fdc3-4a4a-bb19-27525ca262f3_400x.jpg?v=1647390039'
        ]);
    }
}