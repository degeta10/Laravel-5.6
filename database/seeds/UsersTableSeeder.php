<?php

use App\User;
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
        User::create([
            'name' => 'Degeta10',
            'email' => 'degeta10@gmail.com',
            'password' => Hash::make('qwe123'),
        ]);
    }
}
