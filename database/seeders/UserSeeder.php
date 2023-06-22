<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'kepsek',
            'username' => 'kepsek',
            'email' => 'kepsek@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('kepsek');

        User::create([
            'name' => 'guru',
            'username' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('guru');

        User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('user');
    }
}
