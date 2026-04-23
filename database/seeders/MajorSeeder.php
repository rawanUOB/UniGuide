<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ICT = \App\Models\College::where('name', 'School of ICT')->first();
        $ICT->majors()->createMany([
        [
            'name' => 'Bachelor of Cybersecurity',
            'description' => 'Cybersecurity in Bahrain polytechnic focuses on ..... ',
            'duration' => '4 years',
            'requirements' => 'Strong background in mathematics and English and the appliance must pass the admission test of the university',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Programming ',
            'description' => '.......',
            'duration' => '4 years',
            'requirements' => '.......',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Networking',
            'description' => '........',
            'duration' => '4 years',
            'requirements' => '.........',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Cloud Computing and Information Systems',
            'description' => '........',
            'duration' => '4 years',
            'requirements' => '.........',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Data Analytics',
            'description' => '........',
            'duration' => '4 years',
            'requirements' => '.........',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);

    }
}
