<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'saran',
            'email'=>'saran@gmail.lk',
            'password'=>bcrypt('pass'), //bcrypt is default ecryption fucntion . after this have to run the db:seed command

        ]);
    }
}
