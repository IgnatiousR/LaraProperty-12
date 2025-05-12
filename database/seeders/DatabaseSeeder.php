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
        //DB::table('users')->truncate();
        //DB::table('listings')->truncate();

        // User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone_number' => '12345678',
            'email' => 'test@gmail.com',
            'is_admin' => true,
            'password' => '1234',
        ]);

        User::factory()->create([
            'first_name' => 'Test2',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => '12345678',
        ]);
        Listing::factory(10)->create(['by_user_id'=>1]);
        Listing::factory(10)->create(['by_user_id'=>2]);

    }
}
