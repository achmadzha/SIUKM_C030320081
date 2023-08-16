<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'Zhainah Achmad',
            'username'  => 'admin',
            'email'     => 'zhainah.achmad07@gmail.com',
            'password'  => Hash::make('zhainah')
        ]);
    }
}
