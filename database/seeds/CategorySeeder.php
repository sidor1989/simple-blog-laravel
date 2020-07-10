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
        $category = Category::firstOrNew([
            'slug' => 'surgery',
        ]);
        if (!$category->exists) {
            $category->fill([
                'title' => 'Хирургия',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'ortopedy',
        ]);
        if (!$category->exists) {
            $category->fill([
                'title' => 'Ортопедия',
            ])->save();
        }
        $category = Category::firstOrNew([
            'slug' => 'marketing',
        ]);
        if (!$category->exists) {
            $category->fill([
                'title' => 'Маркетинг',
            ])->save();
        }
    }
}
