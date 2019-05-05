<?php

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
        factory(App\Category::class, 5)->create()->each(function ($category) {
            $rand = random_int(1, 10);

            while ($rand > 0)
            {
                $category->products()->save(factory(App\Product::class)->make());
                $rand--;
            }
        });
    }
}
