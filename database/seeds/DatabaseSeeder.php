<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     * UsersTableSeeder - this is seeder name .. to create that [php artisan make:seeder UsersTableSeeder] this is the comamnd
     * seeder created .. have to uncomment this line.. this will point that file and usertable seeder function
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
    }
}
