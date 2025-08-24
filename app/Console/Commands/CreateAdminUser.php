<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or update the admin user with permanent credentials';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating/updating admin user...');

        // Check if admin user already exists
        $adminUser = User::where('email', 'shaf1501@admin.com')->first();

        if ($adminUser) {
            // Update existing user
            $adminUser->update([
                'name' => 'shaf1501',
                'password' => Hash::make('shafin@15-4903'),
            ]);
            $this->info('Admin user updated successfully!');
        } else {
            // Create new admin user
            User::create([
                'name' => 'shaf1501',
                'email' => 'shaf1501@admin.com',
                'password' => Hash::make('shafin@15-4903'),
                'email_verified_at' => now(),
            ]);
            $this->info('Admin user created successfully!');
        }

        $this->line('');
        $this->line('Admin Login Credentials:');
        $this->line('Email: shaf1501@admin.com');
        $this->line('Username: shaf1501');
        $this->line('Password: shafin@15-4903');
        $this->line('');
        $this->line('Access admin panel at: http://localhost:8000/login');

        return 0;
    }
}
