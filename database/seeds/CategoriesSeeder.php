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
                'name' => 'Blockchain',
            ],           
            [
                'name' => 'Cloud Computing'
            ],
            [
                'name' => 'Analytical Reasoning'
            ],
            [
                'name' => 'Game',
            ],   
            [
                'name' => 'Chatbot',
            ],
            [
                'name' => 'Online Training',
            ],
            [
                'name' => 'Digital Assistance',
            ],
            [
                'name' => 'Artificial Intelligence',
            ],        
            [
                'name' => 'UX Design'
            ],
            [
                'name' => 'Business Analysis'
            ],
            [
                'name' => 'Scientific Computing'
            ],
            [
                'name' => 'E-Commerce'
            ],
            [
                'name' => 'Animtion Production',
            ],           
            [
                'name' => 'Cloud Computing'
            ],
            [
                'name' => 'Graphic Design'
            ],
            [
                'name' => 'Digiital Marketing',
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
