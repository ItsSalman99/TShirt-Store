<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

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
            'category_id' => 1,
            'name' => 'Black T-Shirt',
            'slug' => 'black-t-shirt',
            'img' => '/assets/products/Black T-Shirt.png',
            'color' => 'Black',
            'size' => 'Medium',
            'rating' => 3,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 290,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'White T - Shirt',
            'slug' => 'white-t-shirt',
            'img' => '/assets/products/White T - Shirt.png',
            'color' => 'White',
            'size' => 'Medium',
            'rating' => 1,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 280,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'SkyBlue T - Shirt',
            'slug' => 'blue-t-shirt',
            'img' => '/assets/products/SkyBlue T - Shirt.png',
            'color' => 'Sky Blue',
            'size' => 'Medium',
            'rating' => 2,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 285,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Blue T - Shirt',
            'slug' => 'blue-t-shirt',
            'img' => '/assets/products/Blue T - Shirt.png',
            'color' => 'Dark Blue',
            'size' => 'Medium',
            'rating' => 4,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 290,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Blue Polo T-Shirt',
            'slug' => 'blue-polo-t-shirt',
            'img' => '/assets/products/Blue Polo T-Shirt.png',
            'color' => 'Blue',
            'size' => 'Medium',
            'rating' => 3,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 350,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Brownish T - Shirt',
            'slug' => 'brownish-t-shirt',
            'img' => '/assets/products/Brownish T - Shirt.png',
            'color' => 'Brownish',
            'size' => 'Medium',
            'rating' => 5,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 320,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Orange T - Shirt',
            'slug' => 'orange-t-shirt',
            'img' => '/assets/products/Orange T - Shirt.png',
            'color' => 'Orange',
            'size' => 'Medium',
            'rating' => 2,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 270,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Pink T - Shirt',
            'slug' => 'pink-t-shirt',
            'img' => '/assets/products/Pink T - Shirt.png',
            'color' => 'Pink',
            'size' => 'Medium',
            'rating' => 4,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 280,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Red T - Shirt',
            'slug' => 'red-t-shirt',
            'img' => '/assets/products/Red T - Shirt.png',
            'color' => 'Red',
            'size' => 'Medium',
            'rating' => 2,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 340,
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Yellow T - Shirt',
            'slug' => 'yellow-t-shirt',
            'img' => '/assets/products/Yellow T - Shirt.png',
            'color' => 'Yellow',
            'size' => 'Medium',
            'rating' => 3,
            'description' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.',
            'amount' => 320,
        ]);
    }
}
