<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Jho DevOps',
            'email' => 'jho-devops@example.com',
        ]);

        $profile = Profile::factory()->create([
            'user_id' => $user->id
        ]);
        
        Experience::factory(5)->create([
            'profile_id' => $profile->id
        ]);
    }
}
