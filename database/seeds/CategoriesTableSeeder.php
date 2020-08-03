<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Tablets',
            'slug' => 'tablets'
        ]);

        Category::create([
            'name' => 'Laptops',
            'slug' => 'laptops'
        ]);

        Category::create([
            'name' => 'Mobile Phones',
            'slug' => 'mobile phones'
        ]);

        Category::create([
            'name' => 'Computers',
            'slug' => 'computers'
        ]);
    }
}
