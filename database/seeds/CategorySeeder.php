<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'General',
        ]);

        Category::create([
            'name' => 'Phone & Accessories',
        ]);

        Category::create([
            'name' => 'Apparels',
        ]);

        Category::create([
            'name' => 'Food & Baverages',
        ]);

        Category::create([
            'name' => 'Vehicles',
        ]);

        Category::create([
            'name' => 'Electronics',
        ]);

        Category::create([
            'name' => 'Medicines',
        ]);

        Category::create([
            'name' => 'Furnitures',
        ]);
    }
}
