<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        DB::table('categories')->insert([
            [
                'name' => 'Video and Animation',
            ],           
            [
                'name' => 'Graphics and Design'
            ],
            [
                'name' => 'Music and Audio'
            ],
            [
                'name' => 'Game',
            ],  
            [
                'name' => 'Business',
            ],
            [
                'name' => 'Lifestyle',
            ],
            [
                'name' => 'Artificial Intelligence',
            ],        
            [
                'name' => 'UX Design'
            ],
            [
                'name' => 'E-Commerce'
            ],         
            [
                'name' => 'Cloud Computing'
            ],
            [
                'name' => 'Digital Marketing',
            ],           
            [
                'name' => 'Content Writing'
            ],
            [
                'name' => 'Translation'
            ],
        ]);  
    }
}
