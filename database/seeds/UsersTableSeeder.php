<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++) {
            DB::table('users')->insert([
                'name' => 'user' . $i,
                'email' => 'mail' . $i . '@mail.com',
                'password' => Hash::make('password'),
                'role' => 'notAdmin',
            ]);
        }
    }
}
