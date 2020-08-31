<?php

use App\Job;
use App\Category;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id');
        $faker = Faker\Factory::create();

        foreach (range(1, 7) as $id) {
            $job = new Job;
            $job->title = $faker->unique()->jobTitle;
            $job->description = $faker->paragraph;
            $job->company = $faker->unique()->company;
            $job->delivery_time = "7 Days";
            $job->topic = rand(1, 9);
            $job->budget = "20,000 - 50,000" ;
            $job->employer_id = rand(2, 3);
            $job->save();
            $job->categories()->sync($categories->random(rand(1, 3)));
        }
    }
}
