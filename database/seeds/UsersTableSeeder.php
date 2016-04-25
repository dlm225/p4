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
        $user = \p4\User::firstOrCreate(['email' => 'jill@harvard.edu']);
        $user->username = 'Jill';
        $user->email = 'jill@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->location = 'Massachusetts';
        $user->profile_image = '/images/users/Jill.jpg';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 0;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
        $user->username = 'Jamal';
        $user->email = 'jamal@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->location = 'Massachusetts';
        $user->profile_image = '/images/users/Jamal.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 0;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jack@harvard.edu']);
        $user->username = 'Jack';
        $user->email = 'jack@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Anywhere';
        $user->profile_image = '/images/users/Jack.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 12;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'james@harvard.edu']);
        $user->username = 'James';
        $user->email = 'james@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Everywhere';
        $user->profile_image = '/images/users/James.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 120;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jorge@harvard.edu']);
        $user->username = 'Jorge';
        $user->email = 'jorge@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Nowhere';
        $user->profile_image = '/images/users/Jorge.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 1231;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'john@harvard.edu']);
        $user->username = 'John';
        $user->email = 'john@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Somewhere';
        $user->profile_image = '/images/users/John.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 12310;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'joyce@harvard.edu']);
        $user->username = 'Joyce';
        $user->email = 'joyce@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Over There';
        $user->profile_image = '/images/users/Joyce.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 12311;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jane@harvard.edu']);
        $user->username = 'Jane';
        $user->email = 'jane@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Over Here';
        $user->profile_image = '/images/users/Jane.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 340;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jim@harvard.edu']);
        $user->username = 'Jim';
        $user->email = 'jim@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Down Under';
        $user->profile_image = '/images/users/Jim.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 20;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'jackie@harvard.edu']);
        $user->username = 'Jackie';
        $user->email = 'jackie@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'England';
        $user->profile_image = '/images/users/Jackie.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 220;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'bob@harvard.edu']);
        $user->username = 'Bob';
        $user->email = 'bob@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Paris, France';
        $user->profile_image = '/images/users/Bob.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 240;
        $user->save();

        $user = \p4\User::firstOrCreate(['email' => 'dan@harvard.edu']);
        $user->username = 'Dan12345';
        $user->email = 'dan@harvard.edu';
        $user->password = \Hash::make('password');
        $user->location = 'Boston';
        $user->profile_image = '/images/users/Dan.png';
        $user->last_points = '';
        $user->last_login = '';
        $user->points = 2347;
        $user->save();
    }
}
