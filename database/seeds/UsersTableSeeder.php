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
            'name' => 'Lalu Dedi Purnawan',
            'username' => 'LaluPoer',
            'password' => bcrypt('311285'),
            'email' => 'laludedipurnawan@gmail.com',],[
            'name' => 'Ahmad Rafiqi',
            'username' => 'lalurafiqi',
            'password' => bcrypt('askana123'),
            'email' => 'ahmadrafiqi18@gmail.com',
        ]);
    }
}
