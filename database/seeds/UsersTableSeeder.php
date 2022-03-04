<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'default',
            'email'=>'default@hotmail.com',
            'password'=>bcrypt('default')
        ]);

        User::create([
            'name'=>'Jose',
            'email'=>'jose@hotmail.com',
            'password'=>bcrypt('jose')
        ]);
    }
}
