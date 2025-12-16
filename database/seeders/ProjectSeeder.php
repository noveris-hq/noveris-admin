<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Website Redesign',
                'description' => 'Redesign the corporate website for better user experience.',
                'start_date' => '2024-01-15',
                'end_date' => '2024-03-30',
                'status' => 'In Progress',
                'user_id' => 1,
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Develop a mobile app for e-commerce platform.',
                'start_date' => '2024-02-01',
                'end_date' => '2024-06-15',
                'status' => 'Not Started',
                'user_id' => 2,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
