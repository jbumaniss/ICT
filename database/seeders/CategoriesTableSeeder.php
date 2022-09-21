<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all = Category::create(['name' => 'All']);
        $entertainment = Category::create(['name' => 'Entertainment']);
        $business = Category::create(['name' => 'Business']);
        $science = Category::create(['name' => 'Science']);
    }
}
