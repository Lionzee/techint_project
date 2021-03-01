<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Product::all()->count();

        for($i=1;$i<=$count;$i++){

            for($j=1;$j<=rand(2,4);$j++){
                ProductImage::create([
                    'product_id' => $i,
                    'url' => 'https://picsum.photos/200/300'
                ]);
            }
        }
    }
}
