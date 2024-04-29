<?php

namespace Database\Seeders;

use App\Models\Skill; // Import the Skill model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 skills using factory
        // Skill::factory(10)->create();

        // Create a single skill directly
        Skill::create([
            'title' => 'HTML',
            'content' => 'HTML content',
            'skill_image' => 'html_image.jpg', // Replace with the actual image path
            'status' => 0 // Assuming default status is 0
        ]);
    }
}
