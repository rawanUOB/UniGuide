<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scholarship;

class ScholarshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Scholarship::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Scholarship::create([
        'name' => 'Ministry of Education Scholarships',
        'min_gpa' => 90,
        'description' => 'Full scholarships for high school graduates to universities in Bahrain or abroad, covering tuition, stipends, and travel.'
    ]);

    Scholarship::create([
        'name' => 'Crown Prince International Scholarships',
        'min_gpa' => 92,
        'description' => 'Global scholarships for top Bahraini youth at elite universities, with professional development and leadership training.'
    ]);

    Scholarship::create([
        'name' => 'Isa Bin Salman Educational Waqf',
        'min_gpa' => 85,
        'description' => 'Scholarships for low-income students in universities worldwide, aligned with job market needs.'
    ]);

    Scholarship::create([
        'name' => 'Al Mabarrah Al Khalifia Rayyaat Program',
        'min_gpa' => 88,
        'description' => 'Scholarships at accredited Bahrain universities plus workshops, incentives, and community service opportunities.'
    ]);

    Scholarship::create([
        'name' => 'Bahrain Cultural Office US Scholarships',
        'min_gpa' => 90,
        'description' => 'Support for Bahraini students in US universities, covering tuition, health, stipends, and welfare.'
    ]);

    }
}
