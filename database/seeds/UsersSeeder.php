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

        App\User::create([
            'name' => 'Johnny Nguyen',
            'email' => 'dnguye33@gmu.edu',
            'password' => \Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Truc Nguyen',
            'email' => 'tnguye98@gmu.edu',
            'password' => \Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Vu Hoang',
            'email' => 'vhoang3@gmu.edu',
            'password' => \Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Chinh Phan',
            'email' => 'cphan4@gmu.edu',
            'password' => \Hash::make('123456'),
        ]);
    }
}
