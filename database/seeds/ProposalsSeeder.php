<?php

use App\Proposal;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProposalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 207) as $id) {
            $proposal = new Proposal;
            $proposal->job_id = rand(1, 207);
            $proposal->candidate_id = rand(56, 101);
            $proposal->proposal_text = $faker->paragraphs($nb = 3, $nbSentences = 10);
            $proposal->budget = $faker->randomElement(['5,000', '15,000', '25,000', '45,000', ' 65,000', '95,000']);
            $proposal->comment = $faker->sentence($nbWords = 5, $variableNbWords = true);
            $proposal->url = $faker->unique()->url;
            $proposal->save();
        }
    }
}
