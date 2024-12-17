<?php

namespace Database\Seeders;

use App\Models\Task as ModelsTask;
use App\Models\User;
use Illuminate\Console\View\Components\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
        ModelsTask::factory(10)->create();
    }
}