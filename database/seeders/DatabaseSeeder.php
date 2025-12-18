<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(5)
            ->has(Project::factory()->count(3))
            ->create();

        // Create some standalone projects
        Project::factory()->count(10)->create();
        // Create projects with specific statuses
        Project::factory()->count(2)->pending()->create();
        Project::factory()->count(2)->inProgress()->create();
        Project::factory()->count(2)->completed()->create();
        Project::factory()->count(1)->onHold()->create();
        Project::factory()->count(1)->cancelled()->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
