<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
         
         'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
         'title'     => 'any thing1',
         'description' => 'any description1',
         'price'      => 10
      ]);
      $product->save();
      $product = new \App\Product([
         
         'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
         'title'     => 'any thing2',
         'description' => 'any description2',
         'price'      => 10
      ]);
      $product->save();

      $product = new \App\Product([
         
         'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
         'title'     => 'any thing3',
         'description' => 'any description3',
         'price'      => 10
      ]);
      $product->save();

      $product = new \App\Product([
         
         'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
         'title'     => 'any thing4',
         'description' => 'any description4',
         'price'      => 10
      ]);
      $product->save();
    }
}
