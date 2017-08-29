<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userName = ["Luis", "Marx", "Baphomet", "Leviathan", "Trent", "Sartre", "Pygmalion", "Daedelus", "Hal", "Apollonia"];

        for ($i=0; $i < 10 ; $i++) { 
            $user = new App\User();
            $user->email = 'user'.$i.'@codeup.com';
            $user->name = $userName[$i];
            $user->password = Hash::make('password'.$i.'23');
            $user->save();
        }
    }
}