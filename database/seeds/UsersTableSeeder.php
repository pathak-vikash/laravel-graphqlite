<?php

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
        \App\User::truncate();

        $user = new \App\User();
        $user->email = "vikashh.pathak@gmail.com";
        $user->name = "Vikash Pathak";
        $user->password = bcrypt("test1234");

        $user->save();
    }
}
