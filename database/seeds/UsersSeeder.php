<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'David Richard',
            'email' => 'dricha20@gmu.edu',
            'password' => \Hash::make('123456'),
        ]);
    }
}
