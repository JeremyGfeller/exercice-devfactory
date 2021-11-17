<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Category::count()) {
            return;
        }

        Category::factory()
            ->count(10)
            ->has(Category::factory()->count(3)->has(Category::factory()->count(3), 'children'), 'children')
            ->create();
    }
}
