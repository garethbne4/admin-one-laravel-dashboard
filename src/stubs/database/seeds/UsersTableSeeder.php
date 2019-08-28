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
        \App\User::create([
            'file_id' => 1,
            'name' => 'John Morton',
            'email' => 'user@example.com',
            'password' => bcrypt('secret')
        ]);
    }
}