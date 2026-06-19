<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

         $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
        ]);

        $user1 = User::create([
            'name' => 'Budi',
            'email' => 'active@test.com',
            'password' => Hash::make('password'),
        ]);

        $user2 = User::create([
            'name' => 'Siti',
            'email' => 'belum@test.com',
            'password' => Hash::make('password'),
        ]);

        Rental::create([
            'user_id' => $admin->id,
            'status' => 'active',
            'start_date' => now(),
            'end_date' => now()->addDays(9999),
        ]);

        Rental::create([
            'user_id' => $user1->id,
            'status' => 'active',
            'start_date' => now(),
            'end_date' => now()->addDays(7),
        ]);

        // user2 sudah expired
        Rental::create([
            'user_id' => $user2->id,
            'status' => 'expired',
            'start_date' => now()->subDays(10),
            'end_date' => now()->subDays(3),
        ]);

    }
}
