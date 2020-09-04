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
            $job->budget = $faker->randomElement(['5,000 - 20,000', '20,000 - 50,000', '50,000 - 1,00,000', '1 Lakh+']);
            $job->thumbnail = $faker->imageUrl($width = 640, $height = 480, 'business', true, 'skillpark');
            $job->employer_id = rand(5, 55);
            $job->created_at = $faker->unique()->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
            $job->updated_at = $faker->unique()->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
            $job->save();
            $job->categories()->sync($categories->random(rand(1, 3)));
        }
    }
}
