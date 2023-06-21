<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Pondit\Slider\Seip\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product =[
            [
                'name' => 'Product 1',
                'description' => 'Product 1 Description',
                'price' => 100,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Product 2 Description',
                'price' => 200,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Product 3 Description',
                'price' => 300,
            ],
            [
                'name' => 'Product 4',
                'description' => 'Product 4 Description',
                'price' => 400,
            ],
            [
                'name' => 'Product 5',
                'description' => 'Product 5 Description',
                'price' => 500,
            ],
        ];

    }
}
