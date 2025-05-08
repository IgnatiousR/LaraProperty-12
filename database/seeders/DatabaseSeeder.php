<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Truncate all the table data first
        DB::table('users')->truncate();
        DB::table('listings')->truncate();
        // User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'Test',
            'phone_number' => '12345678',
            'email' => 'test@example.com',
            'password' => '1234',
        ]);
        Listing::factory(20)->create();
    }
}
