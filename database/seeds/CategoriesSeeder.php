<?php

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
                'slug' => 'video-animation'
            ],
            [
                'name' => 'Graphics & Design',
                'slug' => 'graphics-design'
            ],
            [
                'name' => 'Music & Audio',
                'slug' => 'music-audio'
            ],
            [
                'name' => 'Game',
                'slug' => 'game',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
            ],
            [
                'name' => 'Lifestyle',
                'slug' => 'lifestyle',
            ],
            [
                'name' => 'Wordpress',
                'slug' => 'wordpress',
            ],
            [
                'name' => 'UX Design',
                'slug' => 'ux-design',
            ],
            [
                'name' => 'E-Commerce',
                'slug' => 'e-commerce',
            ],
            [
                'name' => 'Cloud Computing',
                'slug' => 'cloud-computing',
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
            ],
            [
                'name' => 'Content Writing',
                'slug' => 'content-writing',
            ],
            [
                'name' => 'Translation',
                'slug' => 'translation',
            ],
        ]);
    }
}
