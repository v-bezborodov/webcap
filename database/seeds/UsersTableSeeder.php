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
        factory(\App\User::class)->create([
            'login'                  => 'admin',
            'name'                  => 'Admin',
            'email'                 => 'admin@mailinator.com',
            'phone'                 => '11111111111',
            'email_verified_at'     => \Carbon\Carbon::now(),
            'password'              => 'qwerty123',
            'role'                  => 'admin',
        ]);

        factory(\App\User::class)->create([
            'login'                 => 'user',
            'name'                  => 'User',
            'email'                 => 'user@mailinator.com',
            'phone'                 => '9999999999',
            'email_verified_at'     => \Carbon\Carbon::now(),
            'password'              => 'qwerty123',
            'role'                  => 'user',
        ]);
    }
}
