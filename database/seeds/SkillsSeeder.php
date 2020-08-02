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
                'name' => 'Amargadhi',
            ],           
            [
                'name' => 'Arujundhara'
            ],
            [
                'name' => 'Aurahi'
            ],
        ]);  
    }
}
