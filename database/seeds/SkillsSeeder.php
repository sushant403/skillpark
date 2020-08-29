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
                'name' => 'Sales Consultant',
            ],
            [
                'name' => 'HR Consulting'
            ],
            [
                'name' => 'Android Developer'
            ],
            [
                'name' => 'Java Developer'
            ],
            [
                'name' => 'Laravel and PHP'
            ],
            [
                'name' => 'Django and Python',
            ],
            [
                'name' => 'Graphic Designer'
            ],
            [
                'name' => 'React.JS',
            ],
            [
                'name' => 'Logo Designer'
            ],
            [
                'name' => 'GitLab'
            ],
            [
                'name' => 'Photographer',
            ],
            [
                'name' => 'Content Writer'
            ],
        ]);
    }
}
