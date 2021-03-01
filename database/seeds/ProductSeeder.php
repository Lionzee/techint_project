<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'user_id' => 1,
            'name' => 'Bakso aci telur puyuh',
            'price' => 95000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 1,
            'name' => 'Es Teler',
            'price' => 34000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 2,
            'name' => 'Rice bowl ayam suwir scrambled eggs',
            'price' => 12000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 3,
            'name' => 'Puding Strawberry',
            'price' => 12000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 3,
            'name' => 'roti korea',
            'price' => 50000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 3,
            'name' => 'Red Jelly',
            'price' => 13000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 3,
            'name' => 'Biji Salak',
            'price' => 35000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 4,
            'name' => 'Huawei',
            'price' => 1200000,
            'category_id' => 2,
        ]);

        Product::create([
            'user_id' => 4,
            'name' => 'Bebek Goreng',
            'price' => 25000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 5,
            'name' => 'Puding Mangga',
            'price' => 19000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 5,
            'name' => 'Roti Kane',
            'price' => 5000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 5,
            'name' => 'IPhone 7',
            'price' => 6580000,
            'category_id' => 2,
        ]);

        Product::create([
            'user_id' => 5,
            'name' => 'Culit Krispy',
            'price' => 35000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 6,
            'name' => 'Baju Koko',
            'price' => 95000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 6,
            'name' => 'Baju Tidur Kekinian',
            'price' => 34000,
            'category_id' => 4,
        ]);

        Product::create([
            'user_id' => 7,
            'name' => 'Kabel Listrik Per Meter',
            'price' => 12000,
            'category_id' => 6,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Microwave Murah',
            'price' => 500000,
            'category_id' => 6,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Bor Listrik Tanpa kabel',
            'price' => 200000,
            'category_id' => 6,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Oven Murah',
            'price' => 300000,
            'category_id' => 6,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Samsung Note 10',
            'price' => 10000000,
            'category_id' => 2,
        ]);

        Product::create([
            'user_id' => 9,
            'name' => 'SAMSUNG GALAXY 20 Ultra',
            'price' => 16000000,
            'category_id' => 2,
        ]);

        Product::create([
            'user_id' => 9,
            'name' => 'SAMSUNG A7 2020',
            'price' => 5999999,
            'category_id' => 2,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Baju Batik Motif Naga',
            'price' => 250000,
            'category_id' => 3,
        ]);

        Product::create([
            'user_id' => 8,
            'name' => 'Baju Batik Solo',
            'price' => 400000,
            'category_id' => 3,
        ]);



    }
}
