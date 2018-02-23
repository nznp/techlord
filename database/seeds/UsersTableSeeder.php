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
        App\User::create([
            'name'=> 'kapil shrestha',
            'email'=> 'kapil@kapil.nz',
            'password'=> bcrypt('password')
        ]);
    }
}
