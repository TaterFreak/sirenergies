<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'defaultCompany' => 'company-1',
            'image' => 'https://avatars.githubusercontent.com/u/6029883?v=4'
        ]);
    }
}
