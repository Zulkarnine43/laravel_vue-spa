<?php

namespace Database\Seeders;
use App\Models\category;
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
        //
        category::create([
            'name' => 'cat',
            'slug' => 'cat-1',
        ]);
    }
}
