<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TopicsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(ProposalsSeeder::class);
    }
}
