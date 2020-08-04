<?php

use App\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::truncate();

        DB::table('skills')->insert([
            [
                'name' => 'Customer Service',
            ],           
            [
                'name' => 'Virtual Assistant'
            ],
            [
                'name' => 'E-Commerce'
            ],           
            [
                'name' => 'UX Design'
            ],
            [
                'name' => 'Business Analysis'
            ],
            [
                'name' => 'Digital Marketing',
            ],           
            [
                'name' => 'Analytical Reasoning'
            ],
            [
                'name' => 'Video Production',
            ],           
            [
                'name' => 'Graphic Design'
            ],
            [
                'name' => 'Digital Marketing',
            ],           
            [
                'name' => 'Content Writing'
            ],
            [
                'name' => 'Account'
            ],
            [
                'name' => 'Photographer',
            ],           
            [
                'name' => 'Content Writing'
            ],
            ]);  
    }
}
