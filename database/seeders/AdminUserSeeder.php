<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'eyadhouibi199@gmail.com'],
            [
                'name' => 'eyadh_2025&§!',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'is_admin' => true,
            ]
        );
    }
}
