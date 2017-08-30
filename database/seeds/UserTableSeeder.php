<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Emmanuelle";
        $user->email = "emmanuelle.t.maher@gmail.com";
        $user->password = Hash::make(env('USER_PASSWORD'));
        $user->save();

        // $userName = ["Luis", "Marx", "Baphomet", "Leviathan", "Trent", "Sartre", "Pygmalion", "Daedelus", "Hal", "Apollonia"];

        $faker = Faker\Factory::create();

        for ($i=0; $i < 10 ; $i++) { 
            $user = new User();
            $user->email = $faker->safeEmail;
            $user->name = $faker->userName;
            $user->password = Hash::make($faker->password);
            $user->save();
        }
    }
}