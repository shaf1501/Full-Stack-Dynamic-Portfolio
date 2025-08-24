<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin user already exists
        $adminUser = User::where('email', 'shaf1501@admin.com')->first();

        if (!$adminUser) {
            User::create([
                'name' => 'shaf1501',
                'email' => 'shaf1501@admin.com',
                'password' => Hash::make('shafin@15-4903'),
                'email_verified_at' => now(),
            ]);
        } else {
            // Update existing user
            $adminUser->update([
                'name' => 'shaf1501',
                'password' => Hash::make('shafin@15-4903'),
            ]);
        }
    }
}
