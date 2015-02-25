<?php

//Using fzaninotto faker to seed users
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        //For loop to go through 10 iterations and add data to user table
        for($i = 0; $i < 10; $i++)
        {
            $user = \App\User::create(array(
                'email' => $faker->email,
                'name' => $faker->unique->userName,
                'password' => $faker->word,
                'remember_token' => str_random(50)
            ));
        }
    }
}