<?php

use App\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('topics')->insert([
            [
                'name' => 'Sales Consultant',
            ],
            [
                'name' => 'HR Consultant'
            ],
            [
                'name' => 'Android Developer'
            ],
            [
                'name' => 'Java Developer'
            ],
            [
                'name' => 'Laravel & PHP'
            ],
            [
                'name' => 'Django & Python',
            ],
            [
                'name' => 'Graphic Design'
            ],
            [
                'name' => 'React.JS',
            ],
            [
                'name' => 'Logo Designe'
            ],
            [
                'name' => 'GitLab'
            ],
            [
                'name' => 'Photography',
            ],
            [
                'name' => 'Content Writing'
            ],
        ]);
    }
}
