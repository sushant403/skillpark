<?php

use App\User;
use Faker\Factory;
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
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@skillpark.com.np',
            'email_verified_at' => now(),
            'password' => bcrypt('alphaadmin'),
            'about' => 'This is an Admin. This role can perform tasks like view all users, modify codes and make websites dynamic.',
            'city_id' => 71,
            'avatar' => 'https://avatars2.githubusercontent.com/u/59304990?s=460&u=bcc656b65c5b5370cf54613248b54239c39857b4&v=4',
            'tagline' => 'I am the Boss.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Freelancer User',
            'email' => 'freelancer@skillpark.com.np',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'about' => 'This is a Freelancer. This role can perform tasks like post proposals, view projects, place bids, message clients, view own proposal.',
            'city_id' => 140,
            'tagline' => 'I am a Test Freelancer.',
            'avatar' => 'https://avatars3.githubusercontent.com/u/58490737?s=460&u=be103708db733d2621a6b8d2f1814912fa1b4d68&v=4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('freelancer');

        $user = User::create([
            'name' => 'Nitika Bhatta',
            'email' => 'nitika@skillpark.com.np',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'about' => 'Owns Bhatta Incorporations. This person can perform tasks like post proposals, view projects, place bids, message clients, view own proposal.',
            'city_id' => 140,
            'avatar' => 'https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-1/p160x160/117304905_598831747666475_3946948008009374014_o.jpg?_nc_cat=101&_nc_sid=dbb9e7&_nc_ohc=sOGTElxC_OsAX8Zcgcc&_nc_ht=scontent.fktm8-1.fna&tp=6&oh=79621efa7b37b7d8e4a3be580c146d03&oe=5F7426A4',
            'tagline' => 'Owner of Bhatta Incorporations.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('freelancer');


        $user = User::create([
            'name' => 'Client User',
            'email' => 'client@skillpark.com.np',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'about' => 'This is a Client. This role can perform tasks like post projects, view freelancers, message freelancers, view proposals.',
            'city_id' => 188,
            'tagline' => 'I am a Test Employer/Client.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('client');


        $user = User::create([
            'name' => 'Divesh Thapa',
            'email' => 'divesh@skillpark.com.np',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'about' => 'I am the Owner of Chhetri Industries. This person can perform tasks like post projects, view freelancers, message freelancers, view proposals bidded for my projects.',
            'city_id' => 9,
            'avatar' => 'https://avatars0.githubusercontent.com/u/66884874?s=400&v=4',
            'tagline' => 'Owner of Chhetri Industries.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('client');


        //Ninty-Five (Random Fake Users)
        $faker = Factory::create();

        foreach (range(6, 101) as $id) {
            $user = new User;
            $user->name = $faker->name($gender = 'male' | 'female');
            $user->email = $faker->unique()->email;
            $user->email_verified_at = now();
            $user->password = bcrypt('skillpark');
            $user->about = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
            $user->city_id = rand(1, 259);
            $user->avatar = $faker->imageUrl($width = 540, $height = 480, 'cats');
            $user->tagline = $faker->sentence($nbWords = 4, $variableNbWords = true);
            $user->created_at = $faker->unique()->dateTimeBetween($startDate = '-3 years', $endDate = '-1 years');
            $user->updated_at = $faker->unique()->dateTimeBetween($startDate = '-3 years', $endDate = '-1 years');
            $user->save();
        }
    }
}
