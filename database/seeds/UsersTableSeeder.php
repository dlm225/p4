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
        $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
        $user->username = 'Jill';
        $user->email = 'jill@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->location = 'Massachusetts';
        $user->profile_image = '/images/Jill.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 0;
        $user->save();

        $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
        $user->username = 'Jamal';
        $user->email = 'jamal@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->location = 'Massachusetts';
        $user->profile_image = '/images/Jamal.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 0;
        $user->save();
    }
}
