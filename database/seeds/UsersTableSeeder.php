<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = User::create([ 'name' => 'Freelancer User',
                               'email' => 'freelancer@skillpark.com.np',
                               'email_verified_at' => now(),
                               'password' => bcrypt('password'),
                               'about' => 'This is a Freelancer. This role can perform tasks like post proposals, view projects, place bids, message clients, view own proposal.',
                               'city_id' => 140,
                               'created_at' => now(),
                               'updated_at' => now() ]); 
        $user->assignRole('freelancer');


        $user = User::create([ 'name' => 'Client User',
                               'email' => 'client@skillpark.com.np',
                               'email_verified_at' => now(),
                               'password' => bcrypt('password'),
                               'about' => 'This is a Client. This role can perform tasks like post projects, view freelancers, message freelancers, view proposals.',
                               'city_id' => 188,
                               'created_at' => now(),
                               'updated_at' => now() ]); 
        $user->assignRole('client');


        $user = User::create([ 'name' => 'Admin',
                               'email' => 'admin@skillpark.com.np',
                               'email_verified_at' => now(),
                               'password' => bcrypt('alphaadmin'),
                               'about' => 'This is an Admin. This role can perform tasks like view all users, modify codes and make websites dynamic.',
                               'city_id' => 71,
                               'created_at' => now(),
                               'updated_at' => now() ]); 
        $user->assignRole('admin');
    
    }
}
