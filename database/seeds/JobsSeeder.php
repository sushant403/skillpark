<?php

use App\Job;
use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory;

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
        $faker = Factory::create();

        foreach (range(1, 199) as $id) {
            $job = new Job;
            $job->title = $faker->unique()->jobTitle;
            $job->description = $faker->paragraphs($nb = 3, $nbSentences = 12);
            $job->company = $faker->unique()->company;
            $job->delivery_time = $faker->randomElement(['48 Hours', '7 Days', 'Upon Discussion']);
            $job->topic = rand(1, 12);
            $job->budget = $faker->randomElement(['5,000 - 20,000', '20,000 - 50,000', '50,000 - 1,00,000', '1 Lakh+']);
            $job->thumbnail = rand(3, 4);
            $job->employer_id = rand(4, 5);
            $job->save();
            $job->categories()->sync($categories->random(rand(1, 3)));
        }
    }
}
