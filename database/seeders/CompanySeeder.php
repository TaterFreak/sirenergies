<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'name' => 'Company 1',
            'slug' => 'company-1'
        ]);

        Company::create([
            'name' => 'Company 2',
            'slug' => 'company-2'
        ]);
    }
}
