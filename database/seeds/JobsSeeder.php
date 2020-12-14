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

        foreach (range(1, 207) as $id) {
            $job = new Job;
            $job->title = $faker->unique()->jobTitle;
            $job->description = $faker->paragraphs($nb = 3, $nbSentences = 12);
            $job->company = $faker->unique()->company;
            $job->delivery_time = $faker->randomElement(['48 Hours', '7 Days', 'Upon Discussion']);
            $job->topic = rand(1, 12);
            $job->budget = $faker->randomElement([2000, 6000, 8000, 12000, 15000, 21000, 25000, 35000, 45000, 48000]);
            $job->thumbnail = $faker->imageUrl($width = 720, $height = 370, 'business', true, 'skillpark');
            $job->employer_id = rand(5, 55);
            $job->paid_at = now();
            $job->created_at = $faker->unique()->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
            $job->updated_at = $faker->unique()->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
            $job->save();
            $job->categories()->sync($categories->random(rand(1, 3)));
        }
    }
}
