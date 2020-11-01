<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name'=>'Moad Moad',
            'email'=>'mouad@gmail.com',
            'password'=>bcrypt('123456'),
            'profile_img'=>'profile_img1.jpg'
        ]);
    }
}
