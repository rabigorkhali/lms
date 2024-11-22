<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the user data
        $userData = [
            'name' => 'rabigorkhaly@gmail.com', // Use the real name here if needed
            'email' => 'rabigorkhaly@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rabigorkhaly@gmail.com'), // Default password
            'remember_token' => Str::random(10), // Random remember token
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Insert or update the user with the specified email
        DB::table('users')->updateOrInsert(
            ['email' => 'rabigorkhaly@gmail.com'], // Condition to check if the email exists
            $userData // Data to insert or update
        );
    }
}
