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

        DB::table('categories')->insert([
            [
                'name' => 'Video & Animation',
            ],           
            [
                'name' => 'Graphics & Design'
            ],
            [
                'name' => 'Music & Audio'
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
